<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_tests', function($table){
            $table->increments('id');
            $table->string('key', 100);
            $table->string('value', 100);
            $table->string('hubspot_utk', 37); //renamed to hubstpotutk (without underscore), given 200 char limit
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ab_tests');
    }
}
