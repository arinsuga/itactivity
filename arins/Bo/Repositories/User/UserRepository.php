<?php

namespace Arins\Bo\Repositories\User;

use App\User;
use Arins\Repositories\BaseRepositoryInterface;
use Arins\Repositories\BaseRepository;
use Arins\Bo\Repositories\User\UserRepositoryInterface;

class UserRepository extends BaseRepository
                     implements BaseRepositoryInterface,
                                UserRepositoryInterface

// class UserRepository implements UserRepositoryInterface
                                
{
    protected $data;

    public function __construct($parData)
    {
        $this->data = $parData;
    }

    public function all()
    {
        return $this->data->where('bo', false)->get();
        //return 'Berhasil allBo';
    }

}