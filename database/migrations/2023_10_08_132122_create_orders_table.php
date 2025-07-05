<?php

use App\Enums\Order\HairColors;
use App\Enums\Order\OrderPurpose;
use App\Enums\OrderStatus;
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
            $table->id()->startingValue(10205);
            $table->enum('purpose', OrderPurpose::all())->default(OrderPurpose::EVALUATE);
            $table->string('name')->nullable();
            $table->string('city');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->integer('hair_weight')->nullable();
            $table->integer('hair_length');
            $table->integer('age')->nullable();
            $table->enum('color', HairColors::all());
            $table->json('hair_options')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', OrderStatus::all())->default(OrderStatus::NEW);
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
