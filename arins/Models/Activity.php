<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    protected $table = 'activity';

    protected $fillable = [
        'activitytype_id',
        'activitysubtype_id',
        'activitystatus_id',
        'tasktype_id',
        'tasksubtype1_id',
        'tasksubtype2_id',
        'name',
        'subject',
        'description',
        'resolution',
        'image',
        'startdt',
        'enddt',
        'enduser_id',
        'enduserdept_id',
        'endusersubdept_id',
        'technician_id',
        'created_by',
        'updated_by'
    ];

    protected $dates = [
        'startdt',
        'enddt',
        'created-at',
        'updated_at',
    ];

    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');
    }

    public function updatedBy()
    {
        return $this->belongsTo('App\User', 'updated_by');
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
