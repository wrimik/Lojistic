<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingRate extends Model
{

    protected $discounter; //helper

    public function service()
    {
        return $this->belongsTo('App\ShippingService');
    }

    /**
     * Sets 0 pound shipment values to the 1 pound charge
     * for tariffs that dont have a letter/0Lb charge
     * @param $ratesByWeightZone
     * @return mixed
     */
    public static function useDefaultZeros($ratesByWeightZone)
    {
        for($zone = 2; $zone <= 8; $zone++)
        {
            if(!isset($ratesByWeightZone[0][$zone]))
            {
                $ratesByWeightZone[0][$zone] = $ratesByWeightZone[1][$zone];
            }
        }
        return $ratesByWeightZone;
    }


    /**
     * Default service level and year when calculating DIM charges
     *
     * @param  string $carrier
     * @return array $defaults
     */
    public function dimCarrierDefaults($carrier){
        $defaults = array(
            'ups' => array(
                'carrier' => 'UPS',
                'name' => 'Ground',
                'year'    => '2015 - Daily Rates'
            ),
            'fedex' => array(
                'carrier' => 'FedEx',
                'service' => 'Ground',
                'year'    => '2015'
            )
        );

        return $defaults[$carrier];
    }

    /**
     * Calculates the Dimensional Weight based on the boxes dimensions
     *
     * @param  float $length
     * @param  float $width
     * @param  float $height
     * @param  float $height
     * @param  float $dimFactor
     * @return int $dimWeight
     */
    public function getDIMWeight($length, $width, $height, $dimFactor = 166){
        $dimWeight = ceil(($length * $width * $height) / $dimFactor);
        if($dimWeight > 150)
        {
            $dimWeight = 150;
        }
        return $dimWeight;
    }



}
