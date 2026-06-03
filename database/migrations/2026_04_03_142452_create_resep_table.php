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
    Schema::create('resep', function (Blueprint $table) {
    $table->id();
    $table->string('nama_resep');
    $table->text('deskripsi')->nullable();
    $table->foreignId('penyakit_id')->constrained('penyakit')->onDelete('cascade');
    $table->string('alat_bahan')->nullable();
    $table->text('cara_pembuatan')->nullable();
    $table->text('cara_penggunaan')->nullable();
    $table->timestamps();
});
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resep');
    }
};
