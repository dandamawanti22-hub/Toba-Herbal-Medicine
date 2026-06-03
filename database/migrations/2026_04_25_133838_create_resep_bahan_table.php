<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep_bahan', function (Blueprint $table) {
        $table->id();

        $table->foreignId('resep_id')->constrained('resep')->onDelete('cascade'); // ✅ hanya ini
        $table->foreignId('bahan_id')->constrained('bahans')->onDelete('cascade');
        $table->string('jumlah')->nullable();

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resep_bahan');
    }
};
