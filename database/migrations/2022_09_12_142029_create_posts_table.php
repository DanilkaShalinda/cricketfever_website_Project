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
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->mediumText('description');
            $table->mediumText('cover_image')->nullable();
            $table->mediumText('image_1')->nullable();
            $table->mediumText('image_2')->nullable();
            $table->mediumText('image_3')->nullable();
            $table->mediumText('image_4')->nullable();
            $table->mediumText('image_5')->nullable();
            $table->mediumText('image_6')->nullable();

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
        Schema::dropIfExists('posts');
    }
};
