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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("product_id");
            $table->string('product_name');
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->string('category');
            $table->string('qty');
            $table->string('image_url');
            $table->tinyInteger('availability')->default(1);
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
