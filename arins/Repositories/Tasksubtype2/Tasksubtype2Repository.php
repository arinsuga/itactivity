<?php

namespace Arins\Repositories\Tasksubtype2;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Tasksubtype2\Tasksubtype2RepositoryInterface;

class Tasksubtype2Repository extends BaseRepository implements Tasksubtype2RepositoryInterface
{

    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField = [
            'activitytype_id' => null,
            'tasktype_id' => null,
            'tasksubtype1_id' => null,
            'name' => null,
            'description' => null,
            'image' => null,
            'numsort' => null,
            'status' => null
        ];
    
        $this->validateInput = [
            'tasktype_id' => 'required',
            'tasksubtype1_id' => 'required',
            'name' => 'required',
            'description' => 'required'
        ];
    
        $this->validateField = [
            'activitytype_id' => 'require',
            'tasktype_id' => 'require',
            'tasksubtype1_id' => 'require',
            'name' => 'require',
            'description' => 'require',
            'numsort' => 'require',
            'status' => 'require'
        ];
    }

    public function byActivitytype($id)
    {
        return $this->model->where('activitytype_id', $id)->get();
    }
    
    public function byActivitytypeByTasktypeByTasksubtype1($activityTypeId, $taskTypeId, $tasksubType1Id )
    {
        return $this->model
            ->where('activitytype_id', $activityTypeId)
            ->where('tasktype_id', $taskTypeId)
            ->where('tasksubtype1_id', $tasksubType1Id)->get();
    }
}