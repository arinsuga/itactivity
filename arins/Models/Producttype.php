<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Producttype extends Model
{

    public function products()
    {
        return $this->hasMany('Arins\Models\Product');
    }

    public function productsubtypes()
    {
        return $this->hasMany('Arins\Models\Productsubtype');
    }

}
