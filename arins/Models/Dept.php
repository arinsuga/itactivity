<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
    protected $table = 'dept';

    protected $fillable = [
        'code',
        'name',
        'displayname',
        'description',
        'numsort',
        'status'
    ];

    protected $dates = [
        'created-at',
        'updated_at'
    ];


    public function subdepts() {
        return $this->hasMany('Arins\Models\Subdept');
    }        

    public function employees() {
        return $this->hasMany('Arins\Models\Employee');
    }        
    
    public function activities()
    {
        return $this->hasMany('Arins\Models\Activity');
    }

}
