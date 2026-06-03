<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('resep_herbal', function (Blueprint $table) {
        $table->id();
        $table->foreignId('resep_id')->constrained('resep')->onDelete('cascade');
        $table->foreignId('herbal_id')->constrained('herbal')->onDelete('cascade');
    });
}

    public function down()
    {
        Schema::dropIfExists('resep_herbal');
    }
};