<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKipersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kipers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pemain');
            $table->char('nomer_pemain');
            $table->integer('penampilan');
            $table->integer('saves');
            $table->integer('clearances');
            $table->integer('catches');
            $table->integer('goal_conceded');
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
        Schema::dropIfExists('kipers');
    }
}
