<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Activitytype extends Model
{

    protected $table = 'activitytype';

    protected $fillable = [
        'name',
        'description',
        'image',
        'numsort',
        'status',
    ];

    public function activities()
    {
        return $this->hasMany('Arins\Models\Activity');
    }

    public function activitysubtypes()
    {
        return $this->hasMany('Arins\Models\Activitysubtype');
    }

    public function tasktypes()
    {
        return $this->hasMany('Arins\Models\Tasktype');
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
