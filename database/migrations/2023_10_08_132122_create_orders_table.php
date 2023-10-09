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
            $table->string('goal');
            $table->string('name');
            $table->string('city');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->smallInteger('weight');
            $table->smallInteger('length');
            $table->smallInteger('age');
            $table->string('color');
            $table->string('images')->nullable();
            $table->boolean('cutted')->default(0);
            $table->boolean('painted')->default(0);
            $table->boolean('gray')->default(0);
            $table->text('description')->nullable();
            $table->smallInteger('status')->default(Order::STATUS_NEW);
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