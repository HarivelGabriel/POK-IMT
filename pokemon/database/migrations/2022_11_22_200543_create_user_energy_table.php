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
        Schema::create('user_energy', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('FK_energy')->unsigned()->index();
            $table->foreign('FK_energy')->references('energy_id')->on('energy');
            $table->bigInteger('FK_user')->unsigned()->index();
            $table->foreign('FK_user')->references('id')->on('users');
            //$table->foreignId('energy_id')->constrained('energy');
            //$table->foreignId('user_id')->constrained('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_energy');
    }
};
