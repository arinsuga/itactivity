<?php

namespace Arins\Repositories\Activitysubtype;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Activitysubtype\ActivitysubtypeRepositoryInterface;

class ActivitysubtypeRepository extends BaseRepository implements ActivitysubtypeRepositoryInterface
{

    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField = [
            'activitytype_id' => null,
            'name' => null,
            'description' => null,
            'image' => null,
            'numsort' => null,
            'status' => null,
        ];

        $this->validateInput = [
            'name' => 'required',
            'description' => 'required',
        ];

        $this->validateField = [
            'activitytype_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'numsort' => 'required',
            'status' => 'required',
        ];

    }

    public function byActivitytype($id)
    {
        return $this->model->where('activitytype_id', $id)->get();
    }
}