<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Subdept extends Model
{
    protected $table = 'subdept';

    protected $fillable = [
        'dept_id',
        'code',
        'name',
        'displayname',
        'description',
        'numsort',
        'status',
    ];

    protected $dates = [
        'created-at',
        'updated_at'
    ];


    public function dept() {
        return $this->belongsTo('Arins\Models\Dept');
    }        

    public function employees() {
        return $this->hasMany('Arins\Models\Employee');
    }        

}
