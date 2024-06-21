<?php

namespace Arins\Bo\Http\Controllers\Activity;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use Arins\Http\Controllers\BoController;
use Arins\Traits\Http\Controller\Base;
use Arins\Bo\Http\Controllers\Activity\Reopen;
use Arins\Bo\Http\Controllers\Activity\Pending;
use Arins\Bo\Http\Controllers\Activity\Cancel;
use Arins\Bo\Http\Controllers\Activity\Close;

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
use Arins\Facades\ConvertDate;

class ActivityController extends BoController
{
    use Base, Close, Pending, Cancel, Reopen;

    protected $dataActivitytype;
    protected $dataActivitystatus;
    protected $activitytype_id;
    protected $activitystatus_open;
    protected $dataActivitysubtype;
    protected $dataTasktype;
    protected $dataTasksubtype1;
    protected $dataTasksubtype2;
    protected $dataTechnician;
    protected $dataEmployee;

    public function __construct(ActivityRepositoryInterface $parData,
                                ActivitystatusRepositoryInterface $parActivitystatus,
                                ActivitytypeRepositoryInterface $parActivitytype,
                                ActivitysubtypeRepositoryInterface $parActivitysubtype,
                                TasktypeRepositoryInterface $parTasktype,
                                Tasksubtype1RepositoryInterface $parTasksubtype1,
                                Tasksubtype2RepositoryInterface $parTasksubtype2,
                                EmployeeRepositoryInterface $parEmployee,
                                TechnicianRepositoryInterface $parTechnician=null)
    {
        if ($this->sViewName == null)
        {
            $this->sViewName = 'activity';
        } //end if

        parent::__construct();

        $this->activitystatus_open = 1; //open
        $this->data = $parData;
        $this->dataActivitystatus = $parActivitystatus;
        $this->dataActivitytype = $parActivitytype;
        $this->dataActivitysubtype = $parActivitysubtype;
        $this->dataTasktype = $parTasktype;
        $this->dataTasksubtype1 = $parTasksubtype1;
        $this->dataTasksubtype2 = $parTasksubtype2;
        $this->dataEmployee = $parEmployee;
        $this->dataTechnician = $parTechnician;

        $this->dataModel = [
            'activitystatus' => $this->dataActivitystatus->all(),
            'activitytype' => $this->dataActivitytype->all(),
            'activitysubtype' => $this->dataActivitysubtype->byActivitytype($this->activitytype_id),
            'tasktype' => $this->dataTasktype->byActivitytype($this->activitytype_id),
            'tasksubtype1' => $this->dataTasksubtype1->byActivitytype($this->activitytype_id),
            'tasksubtype2' => $this->dataTasksubtype2->byActivitytype($this->activitytype_id),
            'enduser' => $this->dataEmployee->all(),
            'employee' => $this->dataEmployee->all()
        ];



        if ($this->dataTechnician != null) {
            $this->dataModel['technician'] = $this->dataTechnician->all();
        } //end if

    } //end construction

    // override method transformfield
    protected function transformField($paDataField) {
        $dataField = $paDataField;
        $dataField['activitytype_id'] = $this->activitytype_id; //Support
        $dataField['activitystatus_id'] = $this->activitystatus_open; //open

        // enduser_id
        if (isset($dataField['enduser_id']))
        {
            $employee = $this->dataEmployee->find($dataField['enduser_id']);

            if ($employee != null)
            {
                $dataField['enduserdept_id'] = $employee->dept_id;
                $dataField['endusersubdept_id'] = $employee->subdept_id;
            } //end if

        } //end if

        $dataField['startdt'] = now();


        return $dataField;
    }

    protected function responseView($viewName, $new = false, $fieldEnabled = false, $showResolution = false)
    {
        $this->aResponseData = [
            'viewModel' => $this->viewModel,
            'new' => $new,
            'fieldEnabled' => $fieldEnabled,
            'showResolution' => $showResolution,
            'dataModel' => $this->dataModel
        ];

        foreach ($this->dataModel as $key => $value) {

            $this->aResponseData[$key] = $value;

        } //end loop

        return view($this->sViewRoot . '.' . $viewName, $this->aResponseData);
    }

    protected function updateResult(Request $request, $id, $activityStatusId = null)
    {
        $user = Auth::user();
        //get data from database
        $record = $this->data->find($id);
        $record->activitystatus_id = $activityStatusId;

        //get input value by fillable fields
        $data = $request->only($this->data->getFillable()); //get field input

        //validate input value (validate resolution)
        if ($activityStatusId == 2)
        {
            $record->resolution = $request->input('resolution');
            $request->validate(['resolution' => 'required']);
        } //end if

        if ($activityStatusId != 4)
        {
            $data['enddt'] = now();
        }
        $data['updated_by'] = $user->id;

        if ($this->data->update($record, $data)) {
            return 0; //success
        }

        /** jika tetap terjadi kesalahan maka ada kesalahan pada system */
        //step 2: Kembali ke halaman input
        return 2; //fail of exception
    }

    //overrided method
    protected function processIndex()
    {
        $this->viewModel = Response::viewModel();
        if ($this->activitytype_id == null)
        {
            $this->viewModel->data = $this->data->allOrderByDateAndIdDesc();
        } else {
            $this->viewModel->data = $this->data->byActivitytypeOrderByIdAndStartdtDesc($this->activitytype_id);
        }
    }

    protected function processReport()
    {

        $this->viewModel = Response::viewModel();
        if ($this->activitytype_id == null)
        {
            $this->viewModel->data = $this->data->all();
        } else {
            $this->viewModel->data = $this->data->byActivitytypeOrderByIdAndStartdtDesc($this->activitytype_id);
        }
    }

    public function reportDetail()
    {
        //Check if additional data exist
        if (method_exists($this, 'indexAdditionalData')) {
            $additionalData = $this->indexAdditionalData();
        } //end if

        $this->processReport();

        return $this->responseView('report-detail', false, false, false);
    }

    public function reportDetailCustom()
    {
        $this->viewModel = Response::viewModel();
        $this->viewModel->data = json_decode(json_encode($this->data->getInputField()));
        $this->viewModel->data->date = now();

        $this->CustomResponse();

        return view($this->sViewRoot.'.report-detail-custom', $this->aResponseData);
    }

    /** post */
    public function reportDetailCustomPost(Request $request)
    {

        $filter = $this->filters($request);

        $this->viewModel = Response::viewModel();
        $data = $this->data->getInputField();
        $data['datalist'] = null;
        $this->viewModel->data = json_decode(json_encode($data));
        $this->viewModel->data->datalist = $this->data->byActivitytypeCustom($this->activitytype_id, $filter);
        
        $this->CustomResponse();

        return view($this->sViewRoot.'.report-detail-custom', $this->aResponseData);
    }


    /** get */
    public function indexToday()
    {
        $this->viewModel = Response::viewModel();
        $this->viewModel->data = $this->data->byActivitytypeTodayOrderByIdAndStartdtDesc($this->activitytype_id);

        $this->aResponseData = ['viewModel' => $this->viewModel];

        foreach ($this->dataModel as $key => $value) {

            $this->aResponseData[$key] = $value;

        } //end loop

        return view($this->sViewRoot.'.index-today', $this->aResponseData);
    }

    /** get */
    public function indexOpen()
    {
        $this->viewModel = Response::viewModel();
        $this->viewModel->data = $this->data->byActivitytypeStatusOpenOrderByIdAndStartdtDesc($this->activitytype_id);

        $this->aResponseData = ['viewModel' => $this->viewModel];

        foreach ($this->dataModel as $key => $value) {

            $this->aResponseData[$key] = $value;

        } //end loop

        return view($this->sViewRoot.'.index-open', $this->aResponseData);
    }

    //Response
    protected function CustomResponse()
    {
        $this->aResponseData = [
            'viewModel' => $this->viewModel,
            'new' => true,
            'fieldEnabled' => true,
        ];
        $this->insertDataModelToResponseData();
    }

    /** get */
    public function indexCustom()
    {
        $this->viewModel = Response::viewModel();
        $this->viewModel->data = json_decode(json_encode($this->data->getInputField()));
        $this->viewModel->data->date = now();

        $this->CustomResponse();

        return view($this->sViewRoot.'.index-custom', $this->aResponseData);
    }

    /** post */
    public function indexCustomPost(Request $request)
    {

        $filter = $this->filters($request);

        $this->viewModel = Response::viewModel();
        $data = $this->data->getInputField();
        $data['datalist'] = null;
        $this->viewModel->data = json_decode(json_encode($data));
        $this->viewModel->data->datalist = $this->data->byActivitytypeCustom($this->activitytype_id, $filter);
        
        $this->CustomResponse();

        return view($this->sViewRoot.'.index-custom', $this->aResponseData);
    }


    protected function filters($request) {
        $filter = json_decode(json_encode([
            'startdt' => ConvertDate::strDatetimeToDate($request->input('startdt')),
            'enddt' => ConvertDate::strDatetimeToDate($request->input('enddt')),
            'activitystatus_id' => $request->input('activitystatus_id'),
            'enduser_id' => $request->input('enduser_id'),
            'technician_id' => $request->input('technician_id'),
            'activitysubtype_id' => $request->input('activitysubtype_id'),
            'tasktype_id' => $request->input('tasktype_id'),
            'tasksubtype1_id' => $request->input('tasksubtype1_id'),
            'tasksubtype2_id' => $request->input('tasksubtype2_id'),
        ]));

        return $filter;
    }

}
