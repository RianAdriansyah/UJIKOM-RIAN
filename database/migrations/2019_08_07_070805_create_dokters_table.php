<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_dokter');
            $table->bigInteger('poli_id')->unsigned();
            $table->foreign('poli_id')->references('id')->on('polikliniks')->onDelete('CASCADE');
            $table->bigInteger('kunjungan_id')->unsigned();
            $table->foreign('kunjungan_id')->references('id')->on('kunjungans')->onDelete('CASCADE');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nm_dokter');
            $table->string('sip');
            $table->string('tempat_lahir');
            $table->string('no_tlp');
            $table->text('alamat');
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
        Schema::dropIfExists('dokters');
    }
}
