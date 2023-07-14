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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Convention : alphabetical {ABCDEFGHIJKLMNOPQRSTUWXYZ}  ex: table Books & Table Tags ->  book_tag
        Schema::create('book_tag', function (Blueprint $table) {  
            $table->id();
            //$table->unsignedBigInteger("book_id")->unsigned()->index();
            //$table->foreignId("book_id")->references('id')->on('tags')->onDelete('cascade')->onUpdate('cascade');
            //$table->unsignedBigInteger("tag_id")->unsigned()->index();
            //$table->foreignId("tag_id")->references('id')->on('books')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId("book_id")->constrained()->onDelete('cascade');
            $table->foreignId("tag_id")->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('book_tag');
    }
};
