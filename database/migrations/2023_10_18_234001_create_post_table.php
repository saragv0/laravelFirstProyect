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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table -> string("title", 255);
            $table -> string("slug", 255);
            $table -> text("content", 255);
            $table -> string("image");
            $table -> enum("posted", ['yes', 'not']);
            $table->timestamps();
            //$table->foreignId('categories_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
