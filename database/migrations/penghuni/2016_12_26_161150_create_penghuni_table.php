<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenghuniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghuni', function (Blueprint $penghuni) {
            $penghuni->engine = 'InnoDB';
            $penghuni->increments('penghuni_id');
            $penghuni->string('nama', 100);
            $penghuni->bigInteger('kp', false, true);
            $penghuni->integer('umur', false, true);
            $penghuni->string('bangsa', 10);
            $penghuni->string('agama', 10);
            $penghuni->string('taraf_kahwin', 10);
            $penghuni->string('peringkat_sek', 20);
            $penghuni->text('sejarah');
            $penghuni->string('jantina', 10);
            $penghuni->timestampTz('tarikhMasuk');
            $penghuni->string('tarikhMeninggal', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penghuni');
    }
}
