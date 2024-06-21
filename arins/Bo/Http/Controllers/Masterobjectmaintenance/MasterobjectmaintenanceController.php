<?php

namespace Arins\Bo\Http\Controllers\Masterobjectmaintenance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\Bo\Http\Controllers\Master\MasterController;

use Arins\Repositories\Tasktype\TasktypeRepositoryInterface;
use Arins\Repositories\Activitytype\ActivitytypeRepositoryInterface;

use Arins\Facades\Response;
// use Arins\Facades\Filex;
// use Arins\Facades\Formater;
// use Arins\Facades\ConvertDate;

class MasterobjectmaintenanceController extends MasterController
{
    public function __construct(TasktypeRepositoryInterface $parData)
    {
        $this->sViewName = 'masterobjectmaintenance';
        $this->activitytype_id = 2; //Maintenance

        parent::__construct();
        
        $this->data = $parData;
    }

    //override method
    protected function processIndex()
    {
        $this->viewModel = Response::viewModel();
        $this->viewModel->data = $this->data->byActivitytype($this->activitytype_id);
    }

}
