<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (! Schema::hasTable('rooms')) {
            Schema::create('rooms', function (Blueprint $table) {
                $table->id();
                $table->foreignId('resort_id')->constrained('resorts');
                $table->string('name');
                $table->decimal('price');
                $table->integer('quantity')->default(1);
                $table->text('description')->nullable();
                $table->text('images');
                $table->text('room_amenities');
                $table->integer('number_of_adults')->default(1);
                $table->integer('number_of_children')->default(0);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
