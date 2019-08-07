<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_pasien');
            $table->string('nm_pasien');
            $table->string('jk');
            $table->string('agama');
            $table->text('alamat');
            $table->date('tgl_lahir');
            $table->integer('usia');
            $table->integer('no_tlp');
            $table->string('nm_kk');
            $table->string('hub_kel');
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
        Schema::dropIfExists('pasiens');
    }
}
