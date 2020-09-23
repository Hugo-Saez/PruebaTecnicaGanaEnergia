<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDataToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('surnames');
            $table->string('address');
            $table->string('number');
            $table->string('door');
            $table->integer('postal_code');
            $table->string('locality');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surnames');
            $table->dropColumn('address');
            $table->dropColumn('number');
            $table->dropColumn('door');
            $table->dropColumn('postal_code');
            $table->dropColumn('municipality');
        });
    }
}
