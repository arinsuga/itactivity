<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Tasksubtype1 extends Model
{

    protected $table = 'tasksubtype1';

    protected $fillable = [
        'activitytype_id',
        'tasktype_id',
        'name',
        'description',
        'image',
        "numsort",
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

    public function tasktype()
    {
        return $this->belongsTo('Arins\Models\Tasktype');
    }

    public function tasksubtype2()
    {
        return $this->hasMany('Arins\Models\Tasksubtype2');
    }

}
