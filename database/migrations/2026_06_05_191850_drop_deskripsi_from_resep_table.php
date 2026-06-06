<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropDeskripsiFromResepTable extends Migration
{
    public function up()
    {
        Schema::table('resep', function (Blueprint $table) {
            $table->dropColumn('deskripsi');
        });
    }


    public function down()
    {
        Schema::table('resep', function (Blueprint $table) {
            $table->text('deskripsi')->nullable();
        });
    }
}