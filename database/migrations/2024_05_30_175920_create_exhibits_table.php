<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
    if (!Schema::hasTable('exhibits')) {
        Schema::create('exhibits', function (Blueprint $table) {
            $table->id();
            $table->string('name_exhibits');
            $table->date('year_create');
            // $table->integer('exhibitions_id');
            $table->text('description');
            $table->foreignId('exhibitions_id')->constrained()->onDelete('cascade')->cascadeOnUpdate();
        });
    }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibits');
    }
};
