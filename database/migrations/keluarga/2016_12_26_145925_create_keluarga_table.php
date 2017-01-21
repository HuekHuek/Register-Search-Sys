<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluarga', function (Blueprint $keluarga) {
            $keluarga->engine = 'InnoDB';
            $keluarga->increments('ahli_id');
            $keluarga->integer('penghuni_id', false, true)->unsigned();
            $keluarga->string('ahli_nama', 100);
            $keluarga->bigInteger('ahli_kp', false, true);
            $keluarga->string('ahli_kerja', 20);
            $keluarga->integer('ahli_tel', false, true);
            $keluarga->string('ahli_agama', 10);
            $keluarga->string('ahli_bangsa', 10);
            $keluarga->integer('ahli_umur', false, true);
            $keluarga->string('ahli_jantina', 10);
            $keluarga->string('ahli_hubungan', 20);
        });

        Schema::table('keluarga', function (Blueprint $keluarga) {
            $keluarga->foreign('penghuni_id')->references('penghuni_id')->on('penghuni')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('keluarga');
    }
}
