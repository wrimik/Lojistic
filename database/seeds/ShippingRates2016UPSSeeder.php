<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\ShippingServiceController;

class ShippingRates2016UPSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //php artisan db:seed --class=ShippingRates201UPSSeeder
        Eloquent::unguard();
        $s = new ShippingServiceController();
        $b = base_path('database/seeds/data/2016-rates/ups/');
        $s->importFromFile('2nd Day Air', 'UPS', '2016 - Daily Rates', $b.'2nd-day-air.txt');
        $s->importFromFile('3 Day Select', 'UPS', '2016 - Daily Rates', $b.'3-day-select.txt');
        $s->importFromFile('Ground', 'UPS', '2016 - Daily Rates', $b.'ground.txt');
        $s->importFromFile('Next Day Air', 'UPS', '2016 - Daily Rates', $b.'next-day-air.txt');
        $s->importFromFile('Next Day Air Early A.M.', 'UPS', '2016 - Daily Rates', $b.'next-day-air-early-am.txt');
        $s->importFromFile('Next Day Air Saver', 'UPS', '2016 - Daily Rates', $b.'next-day-air-saver.txt');
    }
}
