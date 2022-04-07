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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
	    $table->string('name');
	    $table->unsignedSmallInteger('dorsal');
	    $table->enum('position', array('DC', 'DF', 'PT', 'MC', 'LI', 'LD', 'EXI', 'EXD', 'MO'));
	    $table->enum('foot', array('L', 'R'));
	    $table->string('slug')->unique();
	    $table->date('born_date');
            $table->timestamps();

	    $table->unsignedBigInteger('team_id')->nullable();
	    $table->foreign('team_id')
		  ->references('id')
		  ->on('teams')
		  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player');
    }
};
