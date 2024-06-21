<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Productsubtype extends Model
{

    protected $fillable = ['producttype_id', 'name', 'description', 'image'];

    public function producttype()
    {
        return $this->belongsTo('Arins\Models\Producttype');
    }

    public function products()
    {
        return $this->hasMany('Arins\Models\Product');
    }

}
