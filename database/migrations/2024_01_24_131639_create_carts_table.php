<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('cart_id');
            $table->string('user_id')->nullable();
            $table->string('session_id')->nullable();
            $table->string('product_id');
            $table->string('product_price');
            $table->integer('quantity');
            $table->string('item_status')->default('in cart'); //either in cart, purchased, or remove
            $table->integer('total_price');
            $table->string('shipping_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
