<?php

// namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersSelectedFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_selected_foods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('food_name');
            $table->double('protein_g', '4', '1');
            $table->double('lipid_g', '4', '1');
            $table->double('carbohydrate_g', '4', '1');
            $table->double('calcium_mg', '4', '0');
            $table->double('iron_mg', '3', '1');
            $table->double('vitaminA_mcg', '4', '0');
            $table->double('vitaminE_mg', '4', '1');
            $table->double('vitaminB1_mg', '3', '1');
            $table->double('vitaminB2_mg', '3', '2');
            $table->double('vitaminC_mg', '3', '0');
            $table->double('dietary_fibers_g', '3', '1');
            $table->double('Saturated_fatty_acid_g', '4', '2');
            $table->double('salt_g', '3', '1');
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
        Schema::dropIfExists('users_selected_foods');
    }
}
