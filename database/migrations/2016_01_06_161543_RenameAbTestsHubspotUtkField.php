<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameAbTestsHubspotUtkField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ab_tests', function($table)
        {
            $table->renameColumn('hubspot_utk', 'hubspotutk'); //because that's what hubspot actually calls it
        });
        Schema::table('ab_tests', function($table)
        {
            $table->string('hubspotutk', 200)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ab_tests', function($table)
        {
            $table->renameColumn('hubspotutk', 'hubspot_utk'); //because that's what we thought it was called before
        });
    }
}
