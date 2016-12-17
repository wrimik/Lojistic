<?php

use Illuminate\Database\Seeder;
use App\ShippingService;

class ServicesTableSeeder extends Seeder
{
    private $services = array(
        ['id' => 17, 'name' => 'SmartPost', 'carrier' => 'FedEx', 'order' =>0],
        ['id' => 2, 'name' => 'Ground', 'carrier' => 'FedEx', 'order' =>1],
        ['id' => 18, 'name' => 'Home Delivery Standard', 'carrier' => 'FedEx', 'order' =>2],
        ['id' => 235, 'name' => 'Home Delivery', 'carrier' => 'FedEx', 'order' =>3],
        ['id' => 232, 'name' => 'Express Saver', 'carrier' => 'FedEx', 'order' =>4],
        ['id' => 10, 'name' => 'Express Saver (3 Day)', 'carrier' => 'FedEx', 'order' =>5],
        ['id' => 230, 'name' => '2 Day', 'carrier' => 'FedEx', 'order' =>6],
        ['id' => 231, 'name' => '2 Day A.M.', 'carrier' => 'FedEx', 'order' =>7],
        ['id' => 8, 'name' => '2 Day Air', 'carrier' => 'FedEx', 'order' =>8],
        ['id' => 16, 'name' => '2 Day Air AM', 'carrier' => 'FedEx', 'order' =>9],
        ['id' => 6, 'name' => 'Standard Overnight', 'carrier' => 'FedEx', 'order' =>10],
        ['id' => 4, 'name' => 'Priority Overnight', 'carrier' => 'FedEx', 'order' =>11],
        ['id' => 15, 'name' => 'First Overnight', 'carrier' => 'FedEx', 'order' =>12],
        ['id' => 236, 'name' => 'International Economy', 'carrier' => 'FedEx', 'order' =>13],
        ['id' => 237, 'name' => 'International Priority', 'carrier' => 'FedEx', 'order' =>14],
        ['id' => 1, 'name' => 'Ground', 'carrier' => 'UPS', 'order' =>0],
        ['id' => 9, 'name' => '3 Day Select', 'carrier' => 'UPS', 'order' =>1],
        ['id' => 7, 'name' => '2 Day Air', 'carrier' => 'UPS', 'order' =>2],
        ['id' => 40, 'name' => '2nd Day Air', 'carrier' => 'UPS', 'order' =>3],
        ['id' => 14, 'name' => '2nd Day Air A.M.', 'carrier' => 'UPS', 'order' =>4],
        ['id' => 5, 'name' => 'Next Day Air Saver', 'carrier' => 'UPS', 'order' =>5],
        ['id' => 3, 'name' => 'Next Day Air', 'carrier' => 'UPS', 'order' =>6],
        ['id' => 13, 'name' => 'Next Day Air Early A.M.', 'carrier' => 'UPS', 'order' =>7],
        ['id' => 54, 'name' => 'Standard to Canada', 'carrier' => 'UPS', 'order' =>8],
        ['id' => 55, 'name' => 'Standard to Mexico', 'carrier' => 'UPS', 'order' =>9],
        ['id' => 52, 'name' => 'Worldwide Saver', 'carrier' => 'UPS', 'order' =>10],
        ['id' => 53, 'name' => 'Worldwide Expedited', 'carrier' => 'UPS', 'order' =>11],
        ['id' => 43, 'name' => 'Worldwide Express', 'carrier' => 'UPS', 'order' =>12],
    );

    public function run()
    {
        DB::table('shipping_services')->truncate();

        foreach($this->services as $service)
        {
            ShippingService::create($service);
        }
    }
}
