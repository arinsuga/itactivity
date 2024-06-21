<?php

namespace Arins\Repositories\Technician;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface TechnicianRepositoryInterface extends BaseRepositoryInterface
{
    function all();
}