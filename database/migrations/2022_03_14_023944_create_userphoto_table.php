<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserphotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uservote', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_users')->unsigned()->index();
            $table->foreign('id_users')->references('id')-> on('users')-> onDelete('cascade');
            $table->bigInteger('id_photo')->unsigned()->index();
            $table->foreign('id_photo')->references('id')-> on('phto')-> onDelete('cascade');
            $table->binary('islike');
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
        Schema::dropIfExists('uservote');
    }
}
