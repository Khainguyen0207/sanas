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
        if (Schema::hasTable('resorts')) {
            Schema::create('feed_back_resorts', function (Blueprint $table) {
                $table->id();
                $table->foreignId('customer_id')->constrained('customers');
                $table->foreignId('resort_id')->constrained('resorts');
                $table->tinyInteger('rate');
                $table->text('comment')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed_back_resorts');
    }
};
