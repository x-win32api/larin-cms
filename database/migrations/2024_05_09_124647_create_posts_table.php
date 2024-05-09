<?php

use App\Models\Category;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)->constrained();
            $table->string('name', 255);
            $table->string('h1', 255);
            $table->text('text');
            $table->text('announce');
            $table->decimal('price');
            $table->string('image',255);
            $table->tinyInteger('published');
            $table->tinyInteger('show_in_feed');
            $table->integer('on_main');
            $table->integer('order');
            $table->string('alias', 255)->unique();
            $table->string('title', 510);
            $table->string('keywords', 510);
            $table->string('description', 510);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
