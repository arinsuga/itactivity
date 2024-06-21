<?php

namespace Arins\Repositories\Technician;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Technician\TechnicianRepositoryInterface;

class TechnicianRepository extends BaseRepository implements TechnicianRepositoryInterface
{
    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField = [
            'name' => null,
            'email' => null,
            'password' => null,
            'email_verified_at' => null,
            'technician' => false,
            'bo' => false,
        ];

        $this->validateInput = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];

        $this->validateField = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];

    }

    public function all($take=null) {
        
        if ($take == null) {
            return $this->model::where('technician', true)
            ->get();
        } else {
            return $this->model::where('technician', true)
            ->take($take)
            ->get();
        } //end if

    } //end method

}