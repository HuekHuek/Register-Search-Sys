<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHartaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harta', function (Blueprint $harta) {
            $harta->engine = 'InnoDB';
            $harta->increments('harta_id');
            $harta->integer('penghuni_id', false, true)->unsigned();
            $harta->string('barang', 150);
            $harta->integer('qty', false, true);
        });

        Schema::table('harta', function (Blueprint $harta) {
            $harta->foreign('penghuni_id')->references('penghuni_id')->on('penghuni')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('harta');
    }
}
