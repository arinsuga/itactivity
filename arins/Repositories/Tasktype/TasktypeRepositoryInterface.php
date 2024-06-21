<?php

namespace Arins\Repositories\Tasktype;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface TasktypeRepositoryInterface extends BaseRepositoryInterface
{
    function byActivitytype($id);
}