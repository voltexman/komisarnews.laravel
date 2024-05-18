<?php

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
            $table->string('page');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('robots')->default('all');
        });

        $pages = [Meta::MAIN_PAGE, Meta::POSTS_PAGE, Meta::CONTACTS_PAGE];

        foreach ($pages as $page) {
            $meta = new Meta();
            $meta->page = $page;
            $meta->save();
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
