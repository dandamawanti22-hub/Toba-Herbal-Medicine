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
        Schema::table('resep', function (Blueprint $table) {
            $table->string('kode_resep')->nullable()->after('id');
        });
    }

    public function down()
    {
        Schema::table('resep', function (Blueprint $table) {
            $table->dropColumn('kode_resep');
        });
    }
};
