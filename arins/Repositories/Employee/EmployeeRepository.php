<?php

namespace Arins\Repositories\Employee;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Employee\EmployeeRepositoryInterface;

class EmployeeRepository extends BaseRepository implements EmployeeRepositoryInterface
{
    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField = [
            //code array here...
            //foreign key
            'user_id' => null,
            //personal
            'nik' => null,
            'noabsen' => null,
            'name' => null,
            'birth_dt' => null,
            'birth_place' => null,
            'image' => null,
            //leave/cuti tahunan
            'annleave_balance' => null,
            'annleave_lastdt' => null,
            //sabbatical/cuti besar
            'sabbatical_balance' => null,
            'sabbatical_lastdt' => null,
            //job period
            'join_dt' => null,
            'probstart_dt' => null,
            'probend_dt' => null,
            'contstart_dt' => null,
            'contend_dt' => null,
            //job
            'empstatus_id' => null,
            'emptype_id' => null,
            'inactivetype_id' => null,
            'job_id' => null,
            'superior_id' => null,
            'branch_id' => null,
            'dept_id' => null,
            'subdept_id' => null,
            'bizunit_id' => null,
            'level_id' => null,
            //personal 2
            'gender_id' => null,
            'marital_id' => null,
            'bloodtype_id' => null,
            'religion_id' => null,
            'nationality_id' => null,
            'education_id' => null,
            //Contact
            'phone1' => null,
            'phone2' => null,
            'phone3' => null,
            'cellphone1' => null,
            'cellphone2' => null,
            'cellphone3' => null,
            'whatsapp1' => null,
            'whatsapp2' => null,
            'whatsapp3' => null,
            'email' => null,
            //address ktp
            'ktp_number' => null,
            'ktp_province_id' => null,
            'ktp_city_id' => null,
            'ktp_street1' => null,
            'ktp_street2' => null,
            'ktp_street3' => null,
            'ktp_postal' => null,
            //address domisili
            'dom_province_id' => null,
            'dom_city_id' => null,
            'dom_street1' => null,
            'dom_street2' => null,
            'dom_street3' => null,
            //bank
            'bank_id' => null,
            'bank_account' => null,
            'bank_accountname' => null,
            //sosmed
            'twitter' => null,
            'facebook' => null,
            'instagram' => null,
            'linkedin' => null,
            'add_info1' => null,
        ];

        $this->validateInput = [
            //personal
            'name' => 'required',
            //job
            //'branch_id' => 'required',
            //'dept_id' => 'required',
            'subdept_id' => 'required',
            'job_id' => 'required',
            //personal 2
            //'gender_id' => 'required',
        ];

        $this->validateField = [
            //personal
            'name' => 'required',
            //job
            'branch_id' => 'required',
            'dept_id' => 'required',
            'subdept_id' => 'required',
            'job_id' => 'required',
            //personal 2
            'gender_id' => 'required',
        ];

    }

}