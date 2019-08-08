<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekamMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_rm');
            $table->bigInteger('tindakan_id')->unsigned();
            $table->foreign('tindakan_id')->references('id')->on('tindakans')->onDelete('CASCADE');
            $table->bigInteger('obat_id')->unsigned();
            $table->foreign('obat_id')->references('id')->on('obats')->onDelete('CASCADE');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('pasien_id')->unsigned();
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('CASCADE');
            $table->string('diagnosa');
            $table->text('resep');
            $table->string('keluhan');
            $table->date('tgl_pemeriksaan');
            $table->string('ket')->nullable();
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
        Schema::dropIfExists('rekam_medis');
    }
}
