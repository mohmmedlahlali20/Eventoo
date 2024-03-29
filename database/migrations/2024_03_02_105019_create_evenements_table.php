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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('lieu');
            $table->date('date');
            $table->string('image')->nullable();
            $table->integer('places_number');
            $table->foreignId('id_organisateur')->constrained('users');
            $table->foreignId('category_id')
            ->constrained('categories')
            ->onDelete('cascade'); 
            $table->enum('validation', ['valid', 'invalid'])->default('invalid');
            $table->enum('status', ['available', 'notAvailable']);
            $table->timestamps();
            $table->softDeletes(); 
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenements');
    }
};
