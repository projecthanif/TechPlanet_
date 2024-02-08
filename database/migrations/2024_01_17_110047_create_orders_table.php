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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->uuid('tracking_id');
            $table->string("product_id")->constrained();
            $table->string("customer_id")->constrained();
            $table->string('shipping_address')->nullable();
            $table->integer('total_amount');
            $table->string("order_status")->default('pending'); //either pending. delivered, cancelled, processing, shipped
            $table->string("method")->default('card');
            $table->string('coupon_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
