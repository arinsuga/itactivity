<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('activitytype_id')->nullable();
            $table->integer('activitysubtype_id')->nullable();
            $table->integer('activitystatus_id')->nullable();

            $table->integer('tasktype_id')->nullable();
            $table->integer('tasksubtype1_id')->nullable();
            $table->integer('tasksubtype2_id')->nullable();

            $table->string('name')->nullable();

            $table->text('subject')->nullable();
            $table->text('description')->nullable();
            $table->text('resolution')->nullable();

            $table->string('image')->nullable();
            $table->dateTime('startdt')->nullable();
            $table->dateTime('enddt')->nullable();
            $table->dateTime('targetdt')->nullable();

            $table->bigInteger('enduser_id')->nullable();
            $table->bigInteger('enduserdept_id')->nullable();
            $table->bigInteger('endusersubdept_id')->nullable();
            $table->bigInteger('technician_id')->nullable();

            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity');
    }
}
