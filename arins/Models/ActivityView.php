<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityView extends Model
{

    protected $table = 'activity_view';

    protected $dates = [
        'startdt',
        'enddt',
        'created-at',
        'updated_at',
        'activity_dt',
    ];

    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function technician()
    {
        return $this->belongsTo('App\User');
    }

    public function enduser()
    {
        return $this->belongsTo('Arins\Models\Employee');
    }

    public function enduserdept() {
        return $this->belongsTo('Arins\Models\Dept');
    }        

    public function activitytype()
    {
        return $this->belongsTo('Arins\Models\Activitytype');
    }

    public function activitysubtype()
    {
        return $this->belongsTo('Arins\Models\Activitysubtype');
    }

    public function activitystatus()
    {
        return $this->belongsTo('Arins\Models\Activitystatus');
    }

    public function tasktype()
    {
        return $this->belongsTo('Arins\Models\Tasktype');
    }

    public function tasksubtype1()
    {
        return $this->belongsTo('Arins\Models\Tasksubtype1');
    }

    public function tasksubtype2()
    {
        return $this->belongsTo('Arins\Models\Tasksubtype2');
    }

}
