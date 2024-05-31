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
        Schema::create('exhibitions', function (Blueprint $table) {
            $table->id();
            $table->string('name_exhibitions');
            $table->string('address');
            $table->string('name_directions');
            $table->integer('ticket_price');
            $table->integer('ticket_count');
            $table->timestamp('time_exhibitions');
            $table->date('date_exhibitions');
            $table->foreign('name_directions')->references('name_directions')->on('directions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibitions');
    }
};
