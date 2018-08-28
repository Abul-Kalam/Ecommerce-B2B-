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
            $table->string('title');
            $table->json('localization')->nullable();
            $table->string('status')->nullable();
            $table->string('description')->nullable();
            $table->float('cost_price')->nullable();
            $table->float('regular_price')->nullable();
            $table->float('mr_price')->nullable();
            $table->float('sale_price')->nullable();
            $table->float('pack_price')->nullable();
            $table->string('sku')->nullable();
            $table->json('meta')->nullable();
            $table->json('image_url')->nullable();
            $table->json('featured')->nullable();
            $table->string('likes')->nullable();
            $table->string('manage_stock')->nullable();
            $table->string('sold_individually')->nullable();
            $table->string('link_products')->nullable();
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
