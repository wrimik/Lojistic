<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\ShippingServiceController;

class ShippingRates2016NextDayAirAMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $s = new ShippingServiceController();
        $b = base_path('database/seeds/data/2016-rates/ups/');
        $s->importFromFile('2nd Day Air A.M.', 'UPS', '2016 - Daily Rates', $b.'2nd-day-air-am.txt');
    }
}
