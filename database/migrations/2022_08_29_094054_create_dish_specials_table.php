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
        Schema::create('dish_specials', function (Blueprint $table) {
            $table->id();
            $table->string('dish_name');
            $table->string('dish_title');
            $table->text('dish_desc_top');
            $table->text('dish_desc_bottom');
            $table->string('dish_image');
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
        Schema::dropIfExists('dish_specials');
    }
};
