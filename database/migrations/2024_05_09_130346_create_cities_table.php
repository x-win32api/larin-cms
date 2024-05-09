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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('from_form',255);
            $table->string('in_form',255);
            $table->string('alias',255)->unique();
            $table->string('postal_code',7);
            $table->string('phone',255);
            $table->double('lat',255);
            $table->double('long',255);
            $table->text('index_text');
            $table->tinyInteger('on_footer');
            $table->text('contact_text');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
