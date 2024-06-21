<?php

namespace Arins\Bo\Http\Controllers\Masteritem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\Bo\Http\Controllers\Master\MasterController;

use Arins\Repositories\Tasktype\TasktypeRepositoryInterface;
use Arins\Repositories\Tasksubtype1\Tasksubtype1RepositoryInterface;
use Arins\Repositories\Tasksubtype2\Tasksubtype2RepositoryInterface;

// use Arins\Facades\Response;
// use Arins\Facades\Filex;
// use Arins\Facades\Formater;
// use Arins\Facades\ConvertDate;

class MasteritemController extends MasterController
{
    protected $dataActivitytype, $dataTasktype, $dataTasksubtype1;

    public function __construct(Tasksubtype2RepositoryInterface $parData,
                                TasktypeRepositoryInterface $parDataTasktype,
                                Tasksubtype1RepositoryInterface $parDataTasksubtype1)
    {
        $this->sViewName = 'masteritem';
        $this->activitytype_id = 1; //Support
        $this->tasktype_id = null; //di null kan krn ambil dari user input

        parent::__construct();

        $this->data = $parData;
        $this->dataTasktype = $parDataTasktype;
        $this->dataTasksubtype1 = $parDataTasksubtype1;

        $this->dataModel = [
            'tasktype' => $this->dataTasktype->byActivitytype($this->activitytype_id),
            'tasksubtype1' => $this->dataTasksubtype1->byActivitytype($this->activitytype_id),
        ];        

    } //end construction

    public function getJson($taskType_id = null, $taskSubtype1_id = null)
    {
        $model = $this->data->byActivitytypeByTasktypeByTasksubtype1($this->activitytype_id, $taskType_id, $taskSubtype1_id);

        $data['results'] = [];

        foreach ($model as $key => $item) {
            array_push($data['results'],['id' => $item->id, 'text' => $item->name]);
        } //end loop
        //$data['pagination'] = ['more' => true];

        return response()->json($data);
    } //end method

} //end class
