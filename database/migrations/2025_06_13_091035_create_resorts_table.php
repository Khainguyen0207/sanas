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
        if (! Schema::hasTable('resorts')) {
            Schema::create('resorts', function (Blueprint $table) {
                $table->id();
                $table->string('slug')->unique();
                $table->foreignId('customer_id')->constrained('customers');
                $table->string('name');
                $table->text('address');
                $table->text('map');
                $table->text('images');
                $table->text('option_success')->nullable();
                $table->text('option_error')->nullable();
                $table->text('general_amenities');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (! Schema::hasTable('rooms')) {
            Schema::dropIfExists('resorts');
        }
    }
};
