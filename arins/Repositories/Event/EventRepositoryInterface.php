<?php

namespace Arins\Repositories\Event;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface EventRepositoryInterface extends BaseRepositoryInterface
{
    function allOrderByDateAndIdDesc();
}