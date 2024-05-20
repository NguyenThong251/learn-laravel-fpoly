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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('codebill');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone_number');
            $table->string('address');
            $table->string('fullname_receive');
            $table->string('phone_number_receive');
            $table->string('address_receive');
            $table->dateTime('order_date');
            $table->integer('status');
            $table->string('note')->nullable();
            $table->decimal('total_money', 15, 2);
            $table->foreignId('voucher_id')->nullable()->constrained('vouchers')->onDelete('set null');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('payment_id')->constrained('payments')->onDelete('cascade');
            $table->foreignId('ship_id')->constrained('ships')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};