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
	  $table->string('name');
	  $table->string('slug')->unique();
	  $table->string('dt');
	  $table->string('stadium');
	  $table->text('history');
	  $table->string('color'); // it can also be like "Azul con rojo"
	  $table->string('location'); // city the team comes from
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
        Schema::dropIfExists('team');
    }
};
