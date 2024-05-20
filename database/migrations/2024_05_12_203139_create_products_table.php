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
        Schema::dropIfExists('products');

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price',10,2)->default(0);
            $table->integer('quantity')->default(0);
            $table->string('image')->nullable();
            $table->integer('discount')->default(0);
            $table->tinyInteger('bestseller')->default(0);
            // $table->integer('category_id')->unsigned();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            // $table->integer('brand_id');
            // $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');
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