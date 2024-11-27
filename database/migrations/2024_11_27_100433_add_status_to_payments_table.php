<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            // Periksa apakah kolom 'status' ada sebelum mencoba memodifikasinya
            if (Schema::hasColumn('payments', 'status')) {
                $table->string('status')->default('pending')->change();
            } else {
                // Jika kolom 'status' belum ada, tambahkan dengan nilai default
                $table->string('status')->default('pending');
            }
        });
    }

    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            // Periksa apakah kolom 'status' ada sebelum mencoba mengubahnya
            if (Schema::hasColumn('payments', 'status')) {
                $table->string('status')->nullable()->change();
            }
        });
    }
};
