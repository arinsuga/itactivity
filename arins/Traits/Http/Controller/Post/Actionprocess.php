<?php

namespace Arins\Traits\Http\Controller\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;

use Arins\Facades\Response;
use Arins\Facades\Filex;
use Arins\Facades\Formater;
use Arins\Facades\ConvertDate;

trait Actionprocess
{

    protected function processStore(Request $request)
    {

        //get input value by fillable fields
        $user = Auth::user();
        $data = $request->only($this->data->getFillable()); //get field input
        $upload = $request->file('upload'); //upload file (image/document) ==> if included
        $imageTemp = $request->input('imageTemp'); //temporary file uploaded
        
        //Check if inputs need to be transformed by transformField method
        // if (method_exists($this, 'transformField')) {
        //     $data = $this->transformField($data);
        // } //end if
        $data = $this->transformField($data);


        //create temporary uploaded image
        $uploadTemp = Filex::uploadTemp($upload, $imageTemp);
        $request->session()->flash('imageTemp', $uploadTemp);

        //validate input value
        $this->validator = Validator::make($data, $this->data->getValidateInput());
        if ($this->validator->fails()) {
            //step 2: Kembali ke halaman input
            return 1; //fail of validation
        } //end if validator

        //copy temporary uploaded image to real path
        $data['image'] = Filex::uploadOrCopyAndRemove('', $uploadTemp, $this->uploadDirectory, $upload, 'public', false);
        $data['created_by'] = $user->id;

        //save data
        if ($this->data->create($data)) {
            return 0; //success
        }

        /** jika tetap terjadi kesalahan maka ada kesalahan pada system */
        //step 1: delete image if fail to save
        Filex::delete($data['image']);

        //step 2: Kembali ke halaman input
        return 2; //fail of exception
    }

    protected function processUpdate(Request $request, $id)
    {
        $user = Auth::user();
        //get data from database
        $record = $this->data->find($id);
        $imageOld = $record->image;

        //get input value by fillable fields
        $data = $request->only($this->data->getFillable()); //get field input
        $upload = $request->file('upload'); //upload file (image/document) ==> if included
        $imageTemp = $request->input('imageTemp'); //temporary file uploaded
        $toggleRemoveImage = $request->input('toggleRemoveImage');

        //create temporary uploaded image
        $uploadTemp = Filex::uploadTemp($upload, $imageTemp);
        $request->session()->flash('imageTemp', $uploadTemp);

        //validate input value
        $request->validate($this->data->getValidateInput());

        $data['updated_by'] = $user->id;
        $imageNew = Filex::uploadOrCopyAndRemove($imageOld, $uploadTemp, $this->uploadDirectory, $upload, 'public', false);
        $data['image'] = $imageNew;
        if (strtolower($toggleRemoveImage) ==  'true')
        {
            $data['image'] = null;
        }

        if ($this->data->update($record, $data)) {
            if ($uploadTemp != null)
            {
                Filex::delete($imageOld);
                Filex::delete($uploadTemp);
            } //end if

            if (strtolower($toggleRemoveImage) == 'true')
            {
                Filex::delete($imageOld);
                Filex::delete($imageNew);
                Filex::delete($uploadTemp);
            }
            return 0; //success
        }

        /** jika tetap terjadi kesalahan maka ada kesalahan pada system */
        //step 1: delete image if fail to save
        if ($uploadTemp != null)
        {
            Filex::delete($data['image']);
        } //end if

        //step 2: Kembali ke halaman input
        return 2; //fail of exception
    }

    protected function processDestroy($id)
    {
        //
        $record = $this->data->find($id);
        //return dd($record);
        $fileName = $record->image;
        
        //$model->delete();
        $this->data->delete($record);
        Filex::delete($fileName); 

        return 0; //success
   }


}

