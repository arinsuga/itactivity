<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class UserabsensiView extends Model
{

    protected $table = 'userabsensi_view';
    protected $fillable = [

    ];

    protected $dates = [
        'tgl',
        'created_at',
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


}
