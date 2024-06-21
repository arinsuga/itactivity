<?php

namespace Arins\Repositories\Product;

use Arins\Repositories\BaseRepositoryInterface;

//Inherit interface to BaseRepositoryInterface
interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    function byProducttype($id, $take=null);
    function byProductsubtype($id, $take=null);
    function byMultikey($producttype_id, $productsubtype_id, $take=null);
}