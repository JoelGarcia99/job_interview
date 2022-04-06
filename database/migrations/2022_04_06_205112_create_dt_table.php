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
        Schema::create('dt', function (Blueprint $table) {
            $table->id();
	    $table->string('name', 50);
	    $table->date('born_date');
	    $table->string('slug', 60)->unique();
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
        Schema::dropIfExists('dt');
    }
};
