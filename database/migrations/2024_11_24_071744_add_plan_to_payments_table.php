<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPlanToPaymentsTable extends Migration
{
    public function up()
{
    Schema::table('payments', function (Blueprint $table) {
        $table->string('plan')->default('monthly'); // Plan dengan default value
    });
}

public function down()
{
    Schema::table('payments', function (Blueprint $table) {
        $table->dropColumn('plan');
    });
}

}