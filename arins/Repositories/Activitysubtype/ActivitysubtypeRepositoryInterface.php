<?php

namespace Arins\Repositories\Activitysubtype;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface ActivitysubtypeRepositoryInterface extends BaseRepositoryInterface
{
    public function byActivitytype($id);
}