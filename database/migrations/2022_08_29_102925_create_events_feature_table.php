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
        Schema::create('events_feature', function (Blueprint $table) {
            $table->id();
            $table->text('ourFeatures');
            $table->bigInteger('event_id')->unsigned(); 
            $table->foreign('event_id')->references('id')->on('events'); 
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
        Schema::dropIfExists('events_feature');
    }
};
