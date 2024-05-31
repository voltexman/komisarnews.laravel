<?php

use App\Enums\Order\Colors;
use App\Enums\Order\Goals;
use App\Enums\Order\Status;
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
            $table->enum('goal', Goals::all())->default(Goals::EVALUATE);
            $table->string('name')->nullable();
            $table->string('city');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->integer('hair_weight')->nullable();
            $table->integer('hair_length');
            $table->integer('age')->nullable();
            $table->enum('color', Colors::all());
            $table->json('hair_options')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', Status::all())->default(Status::NEW);
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
