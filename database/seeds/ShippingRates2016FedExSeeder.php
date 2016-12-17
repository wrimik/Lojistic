<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\ShippingServiceController;

class ShippingRates2016FedExSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //php artisan db:seed --class=ShippingRates2016FedExSeeder
        Eloquent::unguard();
        $s = new ShippingServiceController();
        $b = base_path('database/seeds/data/2016-rates/fedex/');
        $s->importFromFile('2 Day Air AM', 'FedEx', '2016', $b.'2-Day-Air-AM.txt');
        $s->importFromFile('2 Day', 'FedEx', '2016', $b.'2-Day.txt');
        $s->importFromFile('Express Saver', 'FedEx', '2016', $b.'Express-Saver.txt');
        $s->importFromFile('First Overnight', 'FedEx', '2016', $b.'First-Overnight.txt');
        $s->importFromFile('Ground', 'FedEx', '2016', $b.'Ground.txt');
        $s->importFromFile('Home Delivery', 'FedEx', '2016', $b.'Home-Delivery.txt');
        $s->importFromFile('Priority Overnight', 'FedEx', '2016', $b.'Priority-Overnight.txt');
        $s->importFromFile('Standard Overnight', 'FedEx', '2016', $b.'Standard-Overnight.txt');
    }
}
