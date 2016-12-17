<?php

use Illuminate\Database\Seeder;

class RatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fileLocation = 'database/seeds/data/rates.sql';
        DB::table('shipping_rates')->truncate();
//        $query = sprintf("LOAD DATA local INFILE '%s' "
//            . "INTO TABLE shipping_rates FIELDS "
//            . "TERMINATED BY ',' "
//            . "LINES TERMINATED BY '\r' "
//            . "IGNORE 1 LINES "
//            . "(`shipping_service_id`, `zone`, "
//            . "`weight`, `price`, `year`) SET id = NULL", $fileLocation);

        exec("mysql -u ".\Config::get('database.connections.mysql.username').
             " -p".\Config::get('database.connections.mysql.password')." ".
            \Config::get('database.connections.mysql.database')." < $fileLocation");

    }
}
