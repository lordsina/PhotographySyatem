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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
        });

        Schema::create('permission_role', function (Blueprint $table) {
            $table->foreignId("permission_id")->constrained()->onDelete('cascade');
            $table->foreignId("role_id")->constrained()->onDelete('cascade');
            $table->primary(['permission_id','role_id']);
        });

        Schema::create('role_user', function (Blueprint $table) {
            $table->foreignId("role_id")->constrained()->onDelete('cascade');
            $table->foreignId("user_id")->constrained()->onDelete('cascade');
            $table->primary(['role_id','user_id']);
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
