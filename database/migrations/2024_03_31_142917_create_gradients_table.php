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
        Schema::create('gradients', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->integer('from-intensity');
            $table->integer('from-percent');
            $table->string('via');
            $table->integer('via-intensity');
            $table->integer('via-percent');
            $table->string('to');
            $table->integer('to-intensity');
            $table->integer('to-percent');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gradients');
    }
};
