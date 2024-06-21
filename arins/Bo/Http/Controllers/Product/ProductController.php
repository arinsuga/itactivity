<?php

namespace Arins\Bo\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\Repositories\Productsubtype\ProductsubtypeRepositoryInterface;
use Arins\Repositories\Producttype\ProducttypeRepositoryInterface;
use Arins\Repositories\Product\ProductRepositoryInterface;
use Arins\Facades\Response;
use Arins\Facades\Filex;

class ProductController extends Controller
{

    protected $sViewRoot;
    protected $data, $dataProductsubtype, $dataProducttype;
    protected $dataModel;
    protected $validateFields;


    /**
     * Create a new controller instance.
     *
     * Method Name: Constructor
     * 
     * @return void
     */
    public function __construct(ProductRepositoryInterface $parData,
                                ProductsubtypeRepositoryInterface $parProductsubtype,
                                ProducttypeRepositoryInterface $parProducttype)
    {
        $this->middleware('auth.admin');
        $this->middleware('is.admin');

        $psViewRoot = 'bo.product';
        $this->sViewRoot = $psViewRoot;
        $this->data = $parData;
        $this->dataProductsubtype = $parProductsubtype;
        $this->dataProducttype = $parProducttype;
        $this->validateFields = [
            //code array here...
            'productsubtype_id' => 'required',
            'producttype_id' => 'required',
            'name' => 'required',
        ];
        
    }

    /**
     * Method Name: index
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->data->allOrderByIdDesc();
        $viewModel = Response::viewModel();
        $viewModel->data = $data;

        return view($this->sViewRoot.'.index',
        ['viewModel' => $viewModel]);
    }

    /**
     * Method Name: show
     * 
     * http method: GET
     * 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->data->find($id);
        $viewModel = Response::viewModel();
        $viewModel->data = $data;

        //return dd($viewModel->data->producttype->name);

        return view($this->sViewRoot.'.show',
        ['viewModel' => $viewModel, 'new' => false, 'fieldEnabled' => false]);
    }

    /**
     * Method Name: create
     * 
     * http method: GET
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = [
            'productsubtype_id' => null,
            'producttype_id' => null,
            'name' => null,
            'description' => null,
            'image' => null,
        ];
        $viewModel = Response::viewModel();
        $viewModel->data = json_decode(json_encode($data));
        $viewModel->data->date = now();

        //return dd($this->dataProductsubtype->all());

        return view($this->sViewRoot.'.create',
        ['viewModel' => $viewModel, 'new' => true, 'fieldEnabled' => true,
        'productsubtype' => $this->dataProductsubtype->all(),
        'producttype' => $this->dataProducttype->all()]);
    }

    /**
     * Method Name: edit
     * 
     * http method: GET
     * 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->data->find($id);
        $viewModel = Response::viewModel();
        $viewModel->data = $data;

        return view($this->sViewRoot.'.edit',
        ['viewModel' => $viewModel, 'new' => false, 'fieldEnabled' => true,
        'productsubtype' => $this->dataProductsubtype->all(),
        'producttype' => $this->dataProducttype->all()]);
    }

    /**
     * Method Name: delete
     * 
     * http method: GET
     * 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        return view($this->sViewRoot.'.delete');
    }

    /**
     * Method Name: store
     * 
     * http method: POST
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate($this->validateFields);

        $model = $this->data->getInstant();
        $data = $request->only($model->getFillable());

        $path = '';
        $upload = $request->file('upload');
        if ($upload) {
            $path = $upload->store('products', 'public');
        }
        
        if ($path != '')
        {
            $data['image'] = $path;
        }
        
        $model->fill($data)->save();

        return redirect()->route('product.index');
    }

    /**
     * Method Name: udate
     * 
     * http method: POST
     * 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate($this->validateFields);

        $model = $this->data->find($id);
        $data = $request->only($model->getFillable());
        $upload = $request->file('upload');
        $toggleRemoveImage = $request->input('toggleRemoveImage');

        $data['image'] = Filex::uploadOrRemove($model->image, 'products', $upload, 'public', $toggleRemoveImage);

        $model->fill($data)->save();
                
        return redirect()->route('product.index');
    }

    /**
     * Method Name: destroy
     * 
     * http method: POST
     * 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $model = $this->data->find($id);
        $fileName = $model->image;
        $model->delete();
        Filex::delete($fileName);

        return redirect()->route('product.index');
   }
}
