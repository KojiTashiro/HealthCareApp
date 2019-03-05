<?php

// namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rice_dishes')->unique();
            $table->string('bread_products')->unique();
            $table->string('noodle_dishes')->unique();
            $table->string('meat_dishesd')->unique();
            $table->string('seefood_dishes')->unique();
            $table->string('vagetable_dishes')->unique();
            $table->string('fruits')->unique();
            $table->string('egg_dishes')->unique();
            $table->string('dairy_products')->unique();
            $table->string('desserts')->unique();
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
        Schema::dropIfExists('foods_category');
    }
}
