<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            // Periksa apakah kolom 'user_id' sudah ada sebelum mengubahnya
            if (Schema::hasColumn('payments', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable()->change();
            } else {
                // Tambahkan kolom jika belum ada
                $table->unsignedBigInteger('user_id')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            if (Schema::hasColumn('payments', 'user_id')) {
                $table->unsignedBigInteger('user_id')->nullable(false)->change();
            }
        });
    }
};
