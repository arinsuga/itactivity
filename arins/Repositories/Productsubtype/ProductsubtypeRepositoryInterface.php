<?php

namespace Arins\Repositories\Productsubtype;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface ProductsubtypeRepositoryInterface extends BaseRepositoryInterface
{
    function byProducttype($id, $take=null);
}