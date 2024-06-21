<?php

namespace Arins\Repositories\Absensi;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Absensi\AbsensiRepositoryInterface;

class AbsensiRepository extends BaseRepository implements AbsensiRepositoryInterface
{
    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField = [
            //code array here...
        ];

        $this->validateField = [
            //code array here...
        ];

    }

}