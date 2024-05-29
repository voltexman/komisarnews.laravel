<?php

use App\Models\Meta;
use App\Enums\MetaPages;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('robots')->default('all');
        });

        $pages = MetaPages::all();

        foreach ($pages as $page) {
            Meta::create(['page' => $page]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta');
    }
};
