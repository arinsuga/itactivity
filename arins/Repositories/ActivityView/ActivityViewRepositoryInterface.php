<?php

namespace Arins\Repositories\ActivityView;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface ActivityViewRepositoryInterface extends BaseRepositoryInterface
{
    function filterByUserId($id, $where=null);
    function filterUntilDate($untilDate, $where=null);

    function countOpenSupportIncidentByUserUntilDate($userId, $untilDate);
    function countOpenSupportRequestByUserUntilDate($userId, $untilDate);
    function countSupportPendingByUserUntilDate($userId, $untilDate);

    function byActivitytypeCustom($id, $filter, $take=null);
}