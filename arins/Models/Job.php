<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job';

    // protected $fillable = null;


    public function employee() {
        return $this->hasOne('Arins\Models\Employee');
    }

}
