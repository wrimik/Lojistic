<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHubspotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_tokens', function($table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('visitor_token', 100);
        });
        Schema::create('hubspots', function($table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('visitor_token', 100);
            $table->string('hubspot_utk', 100);
            $table->string('hubspot_form_id', 100);
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('company', 100);
            $table->string('email', 100);
            $table->string('comments', 1000);
            $table->string('form_url', 1000);
            $table->string('intent', 1000);
            $table->longText('raw_post_json', 10000);
            $table->smallInteger('valid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hubspots');
        Schema::drop('visitor_tokens');
    }
}
