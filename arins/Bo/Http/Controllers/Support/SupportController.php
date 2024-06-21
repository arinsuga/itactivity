<?php

namespace Arins\Bo\Http\Controllers\Support;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use Arins\Bo\Http\Controllers\Activity\ActivityController;

use Arins\Repositories\Activity\ActivityRepositoryInterface;
    
use Arins\Repositories\Activitystatus\ActivitystatusRepositoryInterface;
use Arins\Repositories\Activitytype\ActivitytypeRepositoryInterface;
use Arins\Repositories\Activitysubtype\ActivitysubtypeRepositoryInterface;
use Arins\Repositories\Tasktype\TasktypeRepositoryInterface;
use Arins\Repositories\Tasksubtype1\Tasksubtype1RepositoryInterface;
use Arins\Repositories\Tasksubtype2\Tasksubtype2RepositoryInterface;
use Arins\Repositories\Employee\EmployeeRepositoryInterface;
use Arins\Repositories\Technician\TechnicianRepositoryInterface;

use Arins\Facades\Response;

class SupportController extends ActivityController
{

    public function __construct(ActivityRepositoryInterface $parData,
                                ActivitystatusRepositoryInterface $parActivitystatus,
                                ActivitytypeRepositoryInterface $parActivitytype,
                                ActivitysubtypeRepositoryInterface $parActivitysubtype,
                                TasktypeRepositoryInterface $parTasktype,
                                Tasksubtype1RepositoryInterface $parTasksubtype1,
                                Tasksubtype2RepositoryInterface $parTasksubtype2,
                                EmployeeRepositoryInterface $parEmployee,
                                TechnicianRepositoryInterface $parTechnician)
    {
        $this->uploadDirectory = 'support';
        $this->sViewName = 'support';
        $this->activitytype_id = 1; //support

        parent::__construct(
            $parData,
            $parActivitystatus,
            $parActivitytype,
            $parActivitysubtype,
            $parTasktype,
            $parTasksubtype1,
            $parTasksubtype2,
            $parEmployee,
            $parTechnician
        );

    } //end construct

    /** override for change activitytype */
    protected function responseView($viewName, $new = false, $fieldEnabled = false, $changeActivitysubtype = false)
    {
        $this->aResponseData = [
            'viewModel' => $this->viewModel,
            'new' => $new,
            'fieldEnabled' => $fieldEnabled,
            'changeActivitysubtype' => $changeActivitysubtype,
            'dataModel' => $this->dataModel
        ];

        foreach ($this->dataModel as $key => $value) {

            $this->aResponseData[$key] = $value;

        } //end loop

        return view($this->sViewRoot . '.' . $viewName, $this->aResponseData);
    }

    /** Activitysubtype */
    public function changeActivitysubtype($id)
    {
        //Check if additional data exist
        if (method_exists($this, 'editAdditionalData')) {
            $additionalData = $this->editAdditionalData($id);
        } //end if

        $this->processEdit($id);

        return $this->responseView('change-activitysubtype', false, false, true);
    }

    /** post */
    public function updateChangeActivitysubtype(Request $request, $id)
    {

        //$processResult = $this->processUpdate($request, $id);

        $processResult = $this->updateActivitysubtype($request, $id);
        return $this->runResponseMethod('update', $processResult, $id);
    }

    /** override */
    protected function updateActivitysubtype(Request $request, $id)
    {
        $user = Auth::user();
        //get data from database
        $record = $this->data->find($id);

        //get input value by fillable fields
        $data = $request->only($this->data->getFillable()); //get field input
        $data['updated_by'] = $user->id;

        //validate input value (validate resolution)
        $record->activitysubtype_id = $request->input('activitysubtype_id');
        $request->validate(['activitysubtype_id' => 'required']);


        if ($this->data->update($record, $data)) {
            return 0; //success
        }

        /** jika tetap terjadi kesalahan maka ada kesalahan pada system */
        //step 2: Kembali ke halaman input
        return 2; //fail of exception
    }

} //end class
