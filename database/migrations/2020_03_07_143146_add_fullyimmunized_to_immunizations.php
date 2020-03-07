<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFullyimmunizedToImmunizations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immunizations', function (Blueprint $table) {
            $table->string('fullyimmunized');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('immunizations', function (Blueprint $table) {
            $table->dropColumn('fullyimmunized');
        });
    }
}
