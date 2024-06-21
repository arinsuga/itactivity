<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('idabsen')->nullable();
            $table->string('badgeno')->nullable();
            $table->date('tgl')->nullable();
            $table->string('daytype')->nullable();
            $table->string('masuk')->nullable();
            $table->string('keluar')->nullable();
            $table->string('work')->nullable();
            $table->string('overtime')->nullable();
            $table->string('leavetype')->nullable();
            $table->text('remark')->nullable();
          

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
        Schema::dropIfExists('absensi');
    }
}
