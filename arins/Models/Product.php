<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['producttype_id', 'productsubtype_id', 'name', 'description', 'image'];

    public function producttype()
    {
        return $this->belongsTo('Arins\Models\Producttype');
    }

    public function productsubtype()
    {
        return $this->belongsTo('Arins\Models\Productsubtype');
    }

}
