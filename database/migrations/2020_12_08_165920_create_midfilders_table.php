<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMidfildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('midfilders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pemain');
            $table->char('nomer_pemain');
            $table->integer('penampilan');
            $table->integer('goal');
            $table->integer('assist');
            $table->integer('passing');
            $table->integer('crossing');
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
        Schema::dropIfExists('midfilders');
    }
}
