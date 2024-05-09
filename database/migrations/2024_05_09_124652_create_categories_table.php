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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('h1', 255);
            $table->string('image',255);
            $table->text('text');
            $table->text('definition');
            $table->string('alias', 255)->unique();
            $table->string('title', 510);
            $table->string('keywords', 510);
            $table->string('description', 510);
            $table->integer('order');
            $table->tinyInteger('published');
            $table->tinyInteger('show_in_feed');
            $table->integer('on_main');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
