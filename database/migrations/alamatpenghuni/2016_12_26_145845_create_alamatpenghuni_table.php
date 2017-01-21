<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlamatpenghuniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamatpenghuni', function (Blueprint $alapenghuni) {
            $alapenghuni->engine = 'InnoDB';
            $alapenghuni->increments('ala_penghuni_id');
            $alapenghuni->integer('penghuni_id', false, true)->unsigned();
            $alapenghuni->string('alamat', 150);
            $alapenghuni->string('negeri', 15);
            $alapenghuni->string('bandar', 15);
            $alapenghuni->integer('poskod', false, true);
        });

        Schema::table('alamatpenghuni', function (Blueprint $alapenghuni) {
            $alapenghuni->foreign('penghuni_id')->references('penghuni_id')->on('penghuni')->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alamatpenghuni');
    }
}
