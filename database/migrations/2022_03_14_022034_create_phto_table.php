<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhtoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phto', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_city')->unsigned()->index();
            $table->foreign('id_city')->references('id')-> on('city')-> onDelete('cascade');
            $table->bigInteger('id_place')->unsigned()->index();
            $table->foreign('id_place')->references('id')-> on('place')-> onDelete('cascade');
            $table->string('url_photo');
            $table->binary('state');
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
        Schema::dropIfExists('phto');
    }
}
