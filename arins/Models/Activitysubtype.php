<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Activitysubtype extends Model
{

    protected $table = 'activitysubtype';

    protected $fillable = [
        'activitytype_id',
        'name',
        'description',
        'image',
        'numsort',
        'status',
    ];

    protected $dates = [
        'created-at',
        'updated_at',
    ];

    public function activities()
    {
        return $this->hasMany('Arins\Models\Activity');
    }

    public function activitytype()
    {
        return $this->belongsTo('Arins\Models\Activitytype');
    }

}
