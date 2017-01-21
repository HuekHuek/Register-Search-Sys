<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saksi', function (Blueprint $saksi) {
            $saksi->engine = 'InnoDB';
            $saksi->increments('saksi_id');
            $saksi->integer('penghuni_id', false, true)->unsigned();
            $saksi->string('saksi_nama', 100);
            $saksi->bigInteger('saksi_kp', false, true);
            $saksi->integer('saksi_tel', false, true);
        });

        Schema::table('saksi', function (Blueprint $saksi) {
            $saksi->foreign('penghuni_id')->references('penghuni_id')->on('penghuni')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
