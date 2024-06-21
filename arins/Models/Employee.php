<?php

namespace Arins\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';

    protected $fillable = [
        //foreign key
        'user_id',
        //personal
        'nik',
        'name',
        'birth_dt',
        'birth_place',
        'image',
        //leave/cuti tahunan
        'annleave_balance',
        'annleave_lastdt',
        //sabbatical/cuti besar
        'sabbatical_balance',
        'sabbatical_lastdt',
        //job period
        'join_dt',
        'probstart_dt',
        'probend_dt',
        'contstart_dt',
        'contend_dt',
        //job
        'empstatus_id',
        'emptype_id',
        'inactivetype_id',
        'superior_id',
        'branch_id',
        'dept_id',
        'subdept_id',
        'bizunit_id',
        'level_id',
        'job_id',
        //personal 2
        'gender_id',
        'marital_id',
        'bloodtype_id',
        'religion_id',
        'nationality_id',
        'education_id',
        //Contact
        'phone1',
        'phone2',
        'phone3',
        'cellphone1',
        'cellphone2',
        'cellphone3',
        'whatsapp1',
        'whatsapp2',
        'whatsapp3',
        'email',
        //address ktp
        'ktp_number',
        'ktp_province_id',
        'ktp_city_id',
        'ktp_street1',
        'ktp_street2',
        'ktp_street3',
        'ktp_postal',
        //address domisili
        'dom_province_id',
        'dom_city_id',
        'dom_street1',
        'dom_street2',
        'dom_street3',
        //bank
        'bank_id',
        'bank_account',
        'bank_accountname',
        //sosmed
        'twitter',
        'facebook',
        'instagram',
        'linkedin',
        'add_info1',
    ];

    protected $dates = [
            //personal
            'birth_dt',
            //leave/cuti tahunan
            'annleave_lastdt',
            //sabbatical/cuti besar
            'sabbatical_lastdt',
            //job period
            'join_dt',
            'probstart_dt',
            'probend_dt',
            'contstart_dt',
            'contend_dt',
            'created-at',
            'updated_at'
        ];

    public function activities()
    {
        return $this->hasMany('Arins\Models\Activity');
    }

    public function dept() {
        return $this->belongsTo('Arins\Models\Dept');
    }        
    
    public function subdept() {
        return $this->belongsTo('Arins\Models\Subdept');
    }        

    public function job() {
        return $this->belongsTo('Arins\Models\Job');
    }        
}
