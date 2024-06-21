<?php

namespace Arins\Repositories\Tasksubtype2;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface Tasksubtype2RepositoryInterface extends BaseRepositoryInterface
{
    function byActivitytype($id);
    function byActivitytypeByTasktypeByTasksubtype1($activityTypeId, $taskTypeId, $tasksubType1Id );
}