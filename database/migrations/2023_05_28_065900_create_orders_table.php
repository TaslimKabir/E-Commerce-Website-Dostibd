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
            $table->string('user_email');
            $table->text('image');
            $table->integer('pid');
            $table->integer('quantity');
            $table->string('subtotal');
            $table->string('status');
            $table->string('name');
            $table->string('company')->nullable();
            $table->string('city');
            $table->string('postal_code');
            $table->string('prefecture');
            $table->string('address');
            $table->string('mobile');
            $table->string('email');
            $table->string('time_slot');
            $table->longText('brand_name');
            $table->string('note')->nullable();
            $table->string('total');
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
