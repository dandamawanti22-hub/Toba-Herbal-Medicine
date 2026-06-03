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
    Schema::create('herbal', function (Blueprint $table) {
    $table->id();
    $table->string('nama_herbal');
    $table->string('nama_latin')->nullable();
    $table->text('khasiat')->nullable();
    $table->string('gambar')->nullable();
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
        Schema::dropIfExists('herbal');
    }
};
