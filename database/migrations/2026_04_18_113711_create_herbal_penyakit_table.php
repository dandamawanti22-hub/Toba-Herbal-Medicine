<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('herbal_penyakit', function (Blueprint $table) {
            $table->id();
            $table->foreignId('herbal_id')->constrained('herbal')->cascadeOnDelete();
            $table->foreignId('penyakit_id')->constrained('penyakit')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('herbal_penyakit');
    }
};