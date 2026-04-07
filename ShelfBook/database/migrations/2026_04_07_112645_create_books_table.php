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
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("author");
            $table->integer("pages")->nullable();
            $table->enum("status", ["to_read", "reading", "finished", "default_to_read"]);
            $table->integer("rating")->nullable();
            $table->foreignId("genre_id")->constrained("genre");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
