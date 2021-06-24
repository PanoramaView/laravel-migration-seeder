<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToVacationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacations', function (Blueprint $table) {
            $table->string('title', 255);
            $table->string('departure', 100);
            $table->string('destination', 100);
            $table->text('description', 255);
            $table->float('price', 8, 2);
            $table->date('flyingDate');
            $table->string('agency', 255)->nullable()->comment('Commento interno agency');
            $table->string('planeName', 255)->nullable()->comment('Non ricordo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacations', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('departure');
            $table->dropColumn('destination');
            $table->dropColumn('description');
            $table->dropColumn('price');
            $table->dropColumn('flyingDate');
            $table->dropColumn('agency');
            $table->dropColumn('planeName');
        });
    }
}
