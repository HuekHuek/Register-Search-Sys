<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyakit', function (Blueprint $penyakit) {
            $penyakit->engine = 'InnoDB';
            $penyakit->increments('penyakit_id');
            $penyakit->integer('penghuni_id', false, true)->unsigned();
            $penyakit->string('penyakit', 100);
            $penyakit->text('ubat');
        });

        Schema::table('penyakit', function (Blueprint $penyakit) {
            $penyakit->foreign('penghuni_id')->references('penghuni_id')->on('penghuni')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penyakit');
    }
}
