<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Tasktype extends Model
{

    protected $table = 'tasktype';

    protected $fillable = [
        'activitytype_id',
        'name',
        'description',
        'image',
        'numsort',
        'status'
    ];

    public function activities()
    {
        return $this->hasMany('Arins\Models\Activity');
    }

    public function activitytype()
    {
        return $this->belongsTo('Arins\Models\Activitytype');
    }

    public function tasksubtype1()
    {
        return $this->hasMany('Arins\Models\Tasksubtype1');
    }

    public function tasksubtype2()
    {
        return $this->hasMany('Arins\Models\Tasksubtype2');
    }

}
