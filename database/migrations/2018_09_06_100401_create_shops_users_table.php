<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops_users', function (Blueprint $table) {
            $table->integer('user_id')->unique();
            $table->integer('shop_id')->unique();
            //$table->string('role')->nullable();
            $table->primary(['user_id', 'shop_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops_users');
    }
}
