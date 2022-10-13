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
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->binary('cover_image');
            $table->string('title');
            $table->mediumText('description');
            $table->binary('image_1')->nullable();
            $table->binary('image_2')->nullable();
            $table->binary('image_3')->nullable();
            $table->binary('image_4')->nullable();
            $table->binary('image_5')->nullable();
            $table->binary('image_6')->nullable();

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
        Schema::dropIfExists('series');
    }
};
