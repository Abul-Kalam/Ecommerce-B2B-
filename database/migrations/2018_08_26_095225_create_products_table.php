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
            $table->string('status')->nullable()->comment('active|inactive');
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->json('variation')->nullable();
            $table->json('meta')->nullable();
            $table->json('image_url')->nullable();
            $table->text('featured')->nullable();
            $table->json('comment')->nullable();
            $table->json('rating')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('shop_id')->nullable();
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
