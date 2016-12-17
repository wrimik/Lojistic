<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(ServicesTableSeeder::class);
        $this->command->info('Service Table Seeded!');
        $this->call(RatesTableSeeder::class);
        $this->command->info('Rate Table Seeded!');
        $this->command->info('About to import 2016 Rates! (this one takes a second)');
        $this->call('ShippingRates2016UPSSeeder');
        $this->command->info('2016 UPS Rates Seeded!');
        $this->call('ShippingRates2016FedExSeeder');
        $this->command->info('2016 FedEx Rates Seeded!');
        $this->call('ShippingRates2016NextDayAirAMSeeder');
        $this->command->info('2016 UPS NDA AM Rates Seeded!');

        $this->command->info('<REMINDER>');
        $this->command->info('If you have changed rates, remember to run: php artisan cache:clear');
        $this->command->info('Once that is done, run: php artisan generate-rate-docs');
        $this->command->info('If you want dummy data for conversions, run:  mysql -u homestead -p loj < database/seeds/data/conversions.sql');
        $this->command->info('</REMINDER>');
        Model::reguard();
    }
}
