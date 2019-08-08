<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('obat_id')->unsigned();
            $table->foreign('obat_id')->references('id')->on('obats')->onDelete('CASCADE');
            $table->bigInteger('rm_id')->unsigned();
            $table->foreign('rm_id')->references('id')->on('rekam_medis')->onDelete('CASCADE');
            $table->string('hasil_lab');
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
        Schema::dropIfExists('labs');
    }
}
