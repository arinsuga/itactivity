<?php

namespace Arins\Repositories\Activitytype;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Activitytype\ActivitytypeRepositoryInterface;

class ActivitytypeRepository extends BaseRepository implements ActivitytypeRepositoryInterface
{
    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField =[
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
            'name' => 'required',
            'description' => 'required',
            'image' => null,
            'numsort' => 'required',
            'status' => 'required',
         ];
        
    }
}