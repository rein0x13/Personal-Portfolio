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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->boolean('visible')->default(true);
            $table->integer('sort')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('tech_stacks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('work_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('skill_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('sort')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
        Schema::dropIfExists('tech_stack');
    }
};
