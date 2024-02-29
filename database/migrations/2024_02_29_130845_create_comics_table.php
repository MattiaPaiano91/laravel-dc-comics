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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 64);
            $table->text('description')->nullable();
            $table->string('thumb', 1024)->nullable();
            $table->decimal('price', 8, 2); 
            $table->string('series',64);
            $table->date('sale_date')->nullable();
            $table->string('type',64)->nullable();
            $table->json('artists'); 
            $table->json('writers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
