<?php

namespace Arins\Bo\Http\Controllers\Mastercategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\Bo\Http\Controllers\Master\MasterController;
use Arins\Http\Controllers\BoController;


use Arins\Repositories\Tasktype\TasktypeRepositoryInterface;
use Arins\Repositories\Activitytype\ActivitytypeRepositoryInterface;

use Arins\Facades\Response;
use Arins\Facades\Filex;
use Arins\Facades\Formater;
use Arins\Facades\ConvertDate;

class MastercategoryController extends MasterController
{
    public function __construct(TasktypeRepositoryInterface $parData)
    {
        $this->sViewName = 'mastercategory';
        $this->activitytype_id = 1; //Support

        parent::__construct();
        
        $this->data = $parData;
    }

}
