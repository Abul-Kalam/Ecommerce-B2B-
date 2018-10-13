<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('status')->nullable();
            $table->string('category')->nullable();
            $table->string('short-description')->nullable();
            $table->text('description')->nullable();
            $table->json('variation')->nullable();
            $table->json('meta')->nullable();
            $table->json('image_url')->nullable();
            $table->json('featured')->nullable();
            $table->integer('likes')->nullable();
            $table->json('comment')->nullable();
            $table->json('rating')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('shop-id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
