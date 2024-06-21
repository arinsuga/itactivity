<?php

namespace Arins\Repositories\Dept;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Dept\DeptRepositoryInterface;

class DeptRepository extends BaseRepository implements DeptRepositoryInterface
{
    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField = [
            //code array here...
            'code' => null,
            'name' => null,
            'displayname' => null,
            'description' => null,
            'numsort' => null,
            'status' => null
        ];

        $this->validateField = [
            //code array here...
            'code' => 'required',
            'name' => 'required',
            'displayname' => 'required',
            'description' => 'required',
        ];

    }

}