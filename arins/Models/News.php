<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'newss';

    protected $fillable = ['name', 'description', 'link', 'date', 'image'];

    protected $dates = [
        'date',
        'created-at',
        'updated_at',
    ];
}
