<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHowitworkesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('howitworkes', function (Blueprint $table) {
            $table->id();
            $table->text('image', 255);
            $table->text('title1', 150);
            $table->text('title2', 150);
            $table->longText('deskripsi1');
            $table->longText('deskripsi2');
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
        Schema::dropIfExists('howitworkes');
    }
}
