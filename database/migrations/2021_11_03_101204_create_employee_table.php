<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {

            //key
            $table->bigIncrements('id');
            //foreign key
            $table->bigInteger('user_id')->nullable();

            //personal
            $table->string('nik')->nullable();
            $table->string('noabsen')->nullable();
            $table->string('name')->nullable();
            $table->datetime('birth_dt')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('image')->nullable();
                        
            //leave/cuti tahunan
            $table->integer('annleave_balance')->nullable();
            $table->datetime('annleave_lastdt')->nullable();
            //sabbatical/cuti besar
            $table->integer('sabbatical_balance')->nullable();
            $table->datetime('sabbatical_lastdt')->nullable();

            //job period
            $table->datetime('join_dt')->nullable();
            $table->datetime('probstart_dt')->nullable();
            $table->datetime('probend_dt')->nullable();
            $table->datetime('contstart_dt')->nullable();
            $table->datetime('contend_dt')->nullable();
            
            //job
            $table->integer('empstatus_id')->nullable();
            $table->integer('emptype_id')->nullable();
            $table->integer('inactivetype_id')->nullable();
            $table->integer('job_id')->nullable();
            $table->integer('superior_id')->nullable();
            $table->integer('branch_id')->nullable();
            $table->integer('dept_id')->nullable();
            $table->integer('subdept_id')->nullable();
            $table->integer('bizunit_id')->nullable();
            $table->integer('level_id')->nullable();

            //personal 2
            $table->integer('gender_id')->nullable();
            $table->integer('marital_id')->nullable();
            $table->integer('bloodtype_id')->nullable();
            $table->integer('religion_id')->nullable();
            $table->integer('nationality_id')->nullable();
            $table->integer('education_id')->nullable();
            
            //Contact
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone3')->nullable();
            $table->string('cellphone1')->nullable();
            $table->string('cellphone2')->nullable();
            $table->string('cellphone3')->nullable();
            $table->string('whatsapp1')->nullable();
            $table->string('whatsapp2')->nullable();
            $table->string('whatsapp3')->nullable();
            $table->string('email')->nullable();
            
            //address ktp
            $table->string('ktp_number')->nullable();
            $table->integer('ktp_province_id')->nullable();
            $table->integer('ktp_city_id')->nullable();
            $table->string('ktp_street1')->nullable();
            $table->string('ktp_street2')->nullable();
            $table->string('ktp_street3')->nullable();
            $table->string('ktp_postal')->nullable();
            
            //address domisili
            $table->integer('dom_province_id')->nullable();
            $table->integer('dom_city_id')->nullable();
            $table->string('dom_street1')->nullable();
            $table->string('dom_street2')->nullable();
            $table->string('dom_street3')->nullable();

            //bank
            $table->integer('bank_id')->nullable();
            $table->string('bank_account')->nullable();
            $table->string('bank_accountname')->nullable();
            
            //sosmed
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
                        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }

}
