<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlamatkeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamatkeluarga', function (Blueprint $alakeluarga) {
            $alakeluarga->engine = 'InnoDB';
            $alakeluarga->increments('ala_keluarga_id');
            $alakeluarga->integer('ahli_id', false, true)->unsigned();
            $alakeluarga->string('ahli_alamat', 200);
            $alakeluarga->string('ahli_negeri', 15);
            $alakeluarga->string('ahli_bandar', 15);
            $alakeluarga->integer('ahli_poskod', false, true);
        });

        Schema::table('alamatkeluarga', function (Blueprint $alakeluarga) {
            $alakeluarga->foreign('ahli_id')->references('ahli_id')->on('keluarga')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alamatkeluarga');
    }
}
