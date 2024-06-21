<?php

namespace Arins\Repositories\Tasksubtype1;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface Tasksubtype1RepositoryInterface extends BaseRepositoryInterface
{
    function byActivitytype($id);
    function byActivitytypeByTasktype($activitytypeId, $tasktypeId );
}