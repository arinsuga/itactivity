<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable = ['name', 'description', 'link', 'date', 'image'];

    protected $dates = [
        'date',
        'created-at',
        'updated_at',
    ];

}
