<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsRecipesPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_recipes', function(Blueprint $table)
    {
        $table->foreignId('ingredients_id');
        $table->foreignId('recipes_id');
        $table->primary(['ingredients_id','recipes_id']);
        $table->decimal('amount',8,2);
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients_recipes');
    }
}
