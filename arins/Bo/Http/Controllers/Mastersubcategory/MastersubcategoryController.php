<?php

namespace Arins\Bo\Http\Controllers\Mastersubcategory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\Bo\Http\Controllers\Master\MasterController;

use Arins\Repositories\Tasktype\TasktypeRepositoryInterface;
use Arins\Repositories\Tasksubtype1\Tasksubtype1RepositoryInterface;

// use Arins\Facades\Response;
// use Arins\Facades\Filex;
// use Arins\Facades\Formater;
// use Arins\Facades\ConvertDate;

class MastersubcategoryController extends MasterController
{
    protected $dataActivitytype, $dataTasktype;

    public function __construct(Tasksubtype1RepositoryInterface $parData,
                                TasktypeRepositoryInterface $parDataTasktype)
    {
        $this->sViewName = 'mastersubcategory';
        $this->activitytype_id = 1; //Support
        $this->tasktype_id = null; //di null kan krn ambil dari user input

        parent::__construct();

        $this->data = $parData;
        $this->dataTasktype = $parDataTasktype;

        $this->dataModel = [
            'tasktype' => $this->dataTasktype->byActivitytype($this->activitytype_id),
        ];        

    }

    public function getJson($taskType_id = null) {

        $model = $this->data->byActivitytypeByTasktype($this->activitytype_id, $taskType_id);
        $data['results'] = [];

        foreach ($model as $key => $item) {
            # code...
            array_push($data['results'],['id' => $item->id, 'text' => $item->name]);
        } //end loop
        //$data['pagination'] = ['more' => true];

        return response()->json($data);
    } //end method

}
