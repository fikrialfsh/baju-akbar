<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesainsendirisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desainsendiris', function (Blueprint $table) {
            $table->id();
            $table->string('tipe_kaos');
            $table->string('warna');
            $table->string('ukuran');
            $table->integer('jumlah');
            $table->string('gambardesain');
            $table->string('description');
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
        Schema::dropIfExists('desainsendiris');
    }
}
