<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntellishipUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intelliship_users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('contact_firstname');
            $table->string('contact_lastname');
            $table->string('contact_email');
            $table->string('contact_password');
            $table->string('phonebusiness');
            $table->string('contact_offercode');
            $table->string('contact_company');
            $table->string('contact_address1');
            $table->string('contact_address2');
            $table->string('contact_city');
            $table->string('contact_state');
            $table->string('contact_zip');
            $table->string('contact_country');
            $table->string('contact_fax');
            $table->string('upswebusername');
            $table->string('upswebuserpassword');
            $table->string('upswebaccount');
            $table->string('fedex_username');
            $table->string('fedex_password');
            $table->string('fedexwebaccount');
            $table->string('bill_address1');
            $table->string('bill_address2');
            $table->string('bill_city');
            $table->string('bill_state');
            $table->string('bill_zip');
            $table->string('bill_country');
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
        Schema::drop('intelliship_users');
    }
}
