<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('herbal', function (Blueprint $table) {
            $table->dropColumn(['cara_pembuatan', 'cara_penggunaan']);
        });
    }

    public function down(): void
    {
        Schema::table('herbal', function (Blueprint $table) {
            $table->text('cara_pembuatan')->nullable();
            $table->text('cara_penggunaan')->nullable();
        });
    }
};