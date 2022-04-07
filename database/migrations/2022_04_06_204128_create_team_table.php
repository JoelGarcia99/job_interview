<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
	  $table->id();
	  $table->string('name', 50);
	  $table->string('slug', 60)->unique();
	  $table->string('color', 20); // it can also be like "Azul con rojo"
	  $table->string('location', 100); // city the team comes from
	  $table->timestamps();

	  $table->unsignedBigInteger('stadium_id')->nullable();
	  $table->foreign('stadium_id')->references('id')->on('stadiums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team');
    }
};
