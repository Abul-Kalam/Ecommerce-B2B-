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
            $table->bigIncrements('id');
            $table->integer('country_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->string('status', 100)->default('unpublished')->comment('published or unpublished published product can be show');
            $table->mediumText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->json('meta')->nullable();
            $table->json('variation')->nullable();
            $table->json('images_url')->nullable();
            $table->json('featured')->nullable();
            $table->string('image')->nullable();
            $table->string('video_url')->nullable();
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
