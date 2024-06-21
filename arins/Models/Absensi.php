<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    /*
    |--------------------------------------------------------------------------
    | KETERANGAN
    |--------------------------------------------------------------------------
    |
    | Table ini tidak bisa dibuat eloquent relationship
    | Karena table ini tidak punya foreign key
    | Table ini terisi melalui proses import dari aplikasi external
    |
    */
    protected $table = 'absensi';

    protected $fillable = [
        'idabsen',
        'badgeno',
        'tgl',
        'daytype',
        'masuk',
        'keluar',
        'work',
        'overtime',
        'leavetype',
        'remark',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];


    public function user() {
        return $this->belongsTo('App\User');
    }        

    public function employee() {
        return $this->belongsTo('Arins\Models\Employee');
    }        

}
