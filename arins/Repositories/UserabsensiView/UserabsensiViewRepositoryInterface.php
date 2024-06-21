<?php

namespace Arins\Repositories\UserabsensiView;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface UserabsensiViewRepositoryInterface extends BaseRepositoryInterface
{
    function all($take=null);
    function byUserId($id, $take=null);
    function byUserIdYearMonth($id, $yearMonth=null, $take=null);
}