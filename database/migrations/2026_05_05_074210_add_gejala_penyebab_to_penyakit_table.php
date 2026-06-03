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
    public function up(): void
    {
        Schema::table('penyakit', function (Blueprint $table) {
            $table->text('gejala')->nullable();
            $table->text('penyebab')->nullable();
            $table->text('pengobatan')->nullable();
            $table->text('pencegahan')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('penyakit', function (Blueprint $table) {
            $table->dropColumn(['gejala', 'penyebab', 'pengobatan', 'pencegahan']);
        });
}
};
