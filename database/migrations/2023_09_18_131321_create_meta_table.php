<?php

use App\Enums\MetaPages;
use App\Models\Meta;
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
        Schema::create('meta', function (Blueprint $table) {
            $table->id();
            $table->enum('page', MetaPages::all());
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('robots')->default('noindex, nofollow');
        });

        Meta::create(['page' => MetaPages::MAIN]);
        Meta::create(['page' => MetaPages::POSTS]);
        Meta::create(['page' => MetaPages::CONTACTS]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta');
    }
};
