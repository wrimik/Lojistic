<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 12/14/15
 * Time: 8:01 AM
 */

namespace App\Helpers;
use App\ShippingRate;

class Discounter
{
    public $advanced = false;
    public $generalDiscount = 0;
    public $tierDiscount = 0;
    public $minimumCharge = 0;
    public $weightDiscounts = [];

    /**
     * Returns formatted array like $array[ zone ][ weight ] = discounted price;
     *
     * @param $ShippingServicesCollection
     * @param $advanced
     * @param $discounts
     * @param $minimumCharge
     * @return array
     */
    public function discountCollection($ShippingServicesCollection, $advanced, $discounts, $minimumCharge)
    {
        $this->setDiscounts($discounts);
        $this->minimumCharge = $minimumCharge;
        $this->advanced = $advanced;
        $discountMethod = ($this->advanced ? 'advancedDiscount' : 'generalDiscount');
        $rates = array();
        foreach($ShippingServicesCollection as $ShippingService)
        {
            foreach($ShippingService->rates as $rate)
            {
                $rates[$rate->weight][$rate->zone] = $this->$discountMethod($rate)->toArray();
            }
        }
        return ShippingRate::useDefaultZeros($rates);
    }

    /**
     * Applies the general discount to shipping rate
     * @param $ShippingRate
     * @return array
     */
    public function generalDiscount($ShippingRate)
    {
        $discounted = $this->discount($ShippingRate->price, $this->generalDiscount);
        $ShippingRate->discountedPrice = $this->minimum($discounted);
        return $ShippingRate;
    }

    /**
     * Applies advanced discount to shipping rate
     * @param $ShippingRate
     * @return array
     */
    public function advancedDiscount($ShippingRate)
    {
        $discount = @$this->weightDiscounts[ $ShippingRate->weight ] + $this->tierDiscount;
        $discounted = $this->discount($ShippingRate->price, $discount);
        $ShippingRate->discountedPrice = $discounted;//$this->minimum($discounted);
        return $ShippingRate;
    }

    private function discount($price, $percent)
    {
        return $price - ($price * ( $percent / 100 ));
    }

    /**
     * $key = "0"
     * $key = "1-5"
     * $key = "6-10"
     * @param $discounts
     */
    public function setDiscounts($discounts)
    {
        $this->generalDiscount = floatval($discounts['general']);
        $this->tierDiscount = floatval($discounts['tier']);
        foreach($discounts as $key => $val)
        {
            if($key == 0)
            {
                $this->weightDiscounts[$key] = $val;
            }
            else
            {
                $keys = explode('-', $key);
                $weight = intval($keys[0]);
                while($weight <= $keys[1])
                {
                    $this->weightDiscounts[$weight] = $val;
                    $weight++;
                }
            }
        }
    }

    private function minimum($discounted)
    {
        return ($discounted > $this->minimumCharge ? $discounted : $this->minimumCharge);
    }

    /**
     * Accepts nested array - turns everything that isn't an array
     * into a float
     * @param $array
     * @return mixed
     */
    private function makeFloats($array)
    {
        foreach($array as $key => $val)
        {
            if(typeOf($val) != 'array')
            {
                $array[$key] = floatval($val);
            }
            else
            {
                $array[$key] = $this->makeFloats($val);
            }
        }
        return $array;
    }
}