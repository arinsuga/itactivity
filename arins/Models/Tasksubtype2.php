<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Tasksubtype2 extends Model
{

    protected $table = 'tasksubtype2';

    protected $fillable = [
        'activitytype_id',
        'tasktype_id',
        'tasksubtype1_id',
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

    public function tasktype()
    {
        return $this->belongsTo('Arins\Models\Tasktype');
    }

    public function tasksubtype1()
    {
        return $this->belongsTo('Arins\Models\Tasksubtype1');
    }

}
