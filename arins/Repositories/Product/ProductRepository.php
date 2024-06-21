<?php

namespace Arins\Repositories\Product;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Product\ProductRepositoryInterface;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    //Override parent class [BaseRepository.all()]
    public function all()
    {
        return $this->data::with('producttype')->get();;
    }

    public function byProducttype($id, $take=null)
    {
        if ($take == null) {
            return $this->data::where('producttype_id', $id)->get();
        } else {
            return $this->data::where('producttype_id', $id)
            ->take($take)
            ->get();
        }
    }

    public function byProductsubtype($id, $take=null)
    {
        if ($take == null) {
            return $this->data::where('productsubtype_id', $id)->get();
        } else {
            return $this->data::where('productsubtype_id', $id)
            ->take($take)
            ->get();
        }
    }

    public function byMultikey($producttype_id, $productsubtype_id, $take=null)
    {
        if ($take == null) {
            return $this->data::where('producttype_id', $producttype_id)
            ->where('productsubtype_id', $productsubtype_id)
            ->get();
        } else {
            return $this->data::where('producttype_id', $producttype_id)
            ->where('productsubtype_id', $productsubtype_id)
            ->take($take)
            ->get();
        }
    }

}