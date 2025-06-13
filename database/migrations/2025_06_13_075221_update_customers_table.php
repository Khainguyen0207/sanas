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
        Schema::table('customers', function (Blueprint $table) {
            $table->string('phone', 20)->nullable()->after('password');
            $table->timestamp('email_verified_at')->nullable()->after('phone');
            $table->string('remember_token', 100)->nullable()->after('email_verified_at');
            $table->tinyInteger('is_verified')->default(0)->after('remember_token');
            $table->timestamp('last_login_at')->nullable()->after('is_verified');
            $table->string('gender')->nullable()->after('last_login_at');
            $table->string('address')->nullable()->after('gender');
            $table->unsignedInteger('is_partner')->default(0)->after('address');
        });
    }


    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn([
                'phone',
                'email_verified_at',
                'remember_token',
                'is_verified',
                'last_login_at',
                'gender',
                'address',
                'is_partner',
            ]);
        });
    }
};
