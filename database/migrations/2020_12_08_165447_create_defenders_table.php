<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defenders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pemain');
            $table->char('nomer_pemain');
            $table->integer('penampilan');
            $table->integer('goal');
            $table->integer('assist');
            $table->integer('tackles');
            $table->integer('interceptions');
            $table->text('gambar');
            $table->string('position');
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
        Schema::dropIfExists('defenders');
    }
}
