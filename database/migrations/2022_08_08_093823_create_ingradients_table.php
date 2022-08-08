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
        Schema::create('ingradients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
            $table->timestamps();
        });

        Schema::create('ingradients_recipes', function (Blueprint $table) {
            $table->foreignId('recipe_id')->references('id')->on('recipes');
            $table->foreignId('ingradient_id')->references('id')->on('ingradients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingradients_recipes');
        Schema::dropIfExists('ingradients');
    }
};
