<?php

namespace Arins\Bo\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\Repositories\Activitytype\ActivitytypeRepositoryInterface;
use Arins\Repositories\Activity\ActivityRepositoryInterface;
use Arins\Facades\Response;
use Arins\Facades\Filex;
use Arins\Facades\Formater;
use Arins\Facades\ConvertDate;

class DashboardController extends Controller
{

    protected $sViewRoot;
    protected $data, $dataActivitytype;
    protected $dataModel;
    protected $validateFields;


    /**
     * Create a new controller instance.
     *
     * Method Name: Constructor
     * 
     * @return void
     */
    public function __construct(ActivityRepositoryInterface $parData,
                                ActivitytypeRepositoryInterface $parActivitytype)
    {
        $this->middleware('auth.admin');
        $this->middleware('is.admin');

        $psViewRoot = 'bo.dashboard';
        $this->sViewRoot = $psViewRoot;
        $this->data = $parData;
        $this->dataActivitytype = $parActivitytype;
        $this->validateFields = [
            //code array here...
            'startdt' => 'required',
            'enddt' => 'required',
            'activitytype_id' => 'required',
            'description' => 'required',
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
        // $data = $this->data->countActivitybyActivityType();
        // return dd($data);
        $data = $this->data->allOrderByIdDesc();

        $viewModel = Response::viewModel();
        $viewModel->data = $data;

        return view($this->sViewRoot.'.index',
        ['viewModel' => $viewModel]);
    }

}
