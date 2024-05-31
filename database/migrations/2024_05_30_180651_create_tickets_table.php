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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            // $table->integer('users_id');
            // $table->integer('exhibitions_id');
            $table->integer('count_tickets');
            $table->integer('sum_tickets');
            $table->foreignId('users_id')->constrained()->onDelete('cascade')->cascadeOnUpdate();
            $table->foreignId('exhibitions_id')->constrained()->onDelete('cascade')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
