<?php

use App\Models\Order;
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
            $table->integer('number');
            $table->string('goal');
            $table->string('name')->nullable();
            $table->string('city');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->integer('hair_weight')->nullable();
            $table->integer('hair_length');
            $table->integer('age')->nullable();
            $table->string('color');
            $table->json('hair_options');
            $table->text('description')->nullable();
            $table->string('status')->default(Order::STATUS_NEW);
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
