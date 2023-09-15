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
        Schema::create('studioprices', function (Blueprint $table) {
 $table->id();
            $table->unsignedBigInteger('product_id');
            $table->decimal('price', 10, 2);
            $table->date('date');
            $table->timestamps();
            
            $table->foreign('product_id')->references('id')->on('studioproducts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studioprices');
    }
};
