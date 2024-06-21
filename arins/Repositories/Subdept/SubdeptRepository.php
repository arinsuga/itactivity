<?php

namespace Arins\Repositories\Subdept;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Subdept\SubdeptRepositoryInterface;

class SubdeptRepository extends BaseRepository implements SubdeptRepositoryInterface
{
    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField = [
            //code array here...
            'dept_id' => null,
            'code' => null,
            'name' => null,
            'displayname' => null,
            'description' => null,
            'numsort' => null,
            'status' => null,
    
        ];

        $this->validateField = [
            //code array here...
            'dept_id' => 'required',
            'code' => 'required',
            'name' => 'required',
            'displayname' => 'required',
            'description' => 'required',
        ];

    }

}