<?php

namespace Arins\Repositories\Productsubtype;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Productsubtype\ProductsubtypeRepositoryInterface;

class ProductsubtypeRepository extends BaseRepository implements ProductsubtypeRepositoryInterface
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

}