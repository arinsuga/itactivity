<?php

namespace Arins\Repositories\ActivityViewjoin;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface ActivityViewjoinRepositoryInterface extends BaseRepositoryInterface
{
    function filterByUserId($id, $where=null);
    function filterUntilDate($untilDate, $where=null);
    function getTaskByUser($userId, $activitytype_id=null, $where=null, $take=null);

    function getSupportByUser($userId, $take=null);
    function getProjectByUser($userId, $take=null);
}