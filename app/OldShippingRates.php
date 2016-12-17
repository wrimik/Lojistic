<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingRates extends Model
{
    protected $table = 'rates';
    protected $primaryKey = 'rate_id';
    public $timestamps = false;
    protected $fillable = ['weight', 'zone', 'price', 'year'];

    /**
     * Fetches rate sheet
     *
     * @param  string $carrier
     * @param  string $year
     * @param  string $service
     * @param  float $min
     * @param  float $generalDiscount
     * @param  array $discountArray
     * @return array
     */
    public function getShippingRates($carrier, $year, $service, $min, $generalDiscount, $discountArray = false)
    {
        $result = \DB::table('rates')
            ->join('services', 'rates.service_id', '=', 'services.id')
            ->where('carrier', $carrier)
            ->where('name', $service)
            ->where('year', $year)
            ->orderBy('weight', 'ASC')
            ->orderBy('zone', 'ASC')
            ->get();

        $rep = array();

        foreach ($result as $r) {
            $rep[$r->weight][$r->zone] = $this->discount($r->price, $min, $r->weight, $generalDiscount, $discountArray);
        }
        return $rep;
    }

    /**
     * Applys discounts / min price to a rate
     *
     * @param  float $price
     * @param  float $min
     * @param  int $weight
     * @param  int $discount
     * @param array $discountArray
     * @return mixed
     */
    public function discount($price, $min, $weight, $generalDiscount, $discountArray = false)
    {

        $discount = 0;

        if ($generalDiscount) {

            $discount = $generalDiscount;

        } else if ($discountArray != false) {

            switch ($weight) {

                case 0:
                    //letter
                    $discount = $discountArray[0];
                    break;

                case 1 >= $weight && $weight <= 150:
                    // find the 1-5,  6-10, 11-15  weight brake that this weight falls in to
                    $weightBreakMax = $this->roundUp($weight, 5);
                    $weightBreakMin = $weightBreakMax - 4;
                    $discount = $discountArray["$weightBreakMin-$weightBreakMax"];
                    break;
            }

        }

        $p = $price - ($price * ($discount / 100));

        return $this->min($p, $min);
    }


    /**
     * Rounds the number ($n) up to the next break point ($x)
     *
     * @param  float $price
     * @param  float $min
     * @return float
     */
    function roundUp($n, $x = 5)
    {
        if ($n > 1) {
            $n = $n - 1;
        }
        return round(($n + $x / 2) / $x) * $x;
    }


    /**
     * Gives you the price respective of the minimum charge
     *
     * @param  float $price
     * @param  float $min
     * @return float
     */
    public function min($price, $min)
    {

        return ($price < $min ? $min : $price);

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
    public function getDIMWeight($length, $width, $height, $dimFactor = 166)
    {
        $dimWeight = ceil(($length * $width * $height) / $dimFactor);
        if ($dimWeight > 150) {
            $dimWeight = 150;
        }
        return $dimWeight;
    }


    /**
     * Default service level and year when calculating DIM charges
     *
     * @param  string $carrier
     * @return array $defaults
     */
    public function dimCarrierDefaults($carrier)
    {
        $defaults = array(
            'ups' => array(
                'service' => 'ground',
                'year' => '2015 - Daily Rates'
            ),
            'fedex' => array(
                'service' => 'Ground',
                'year' => '2015'
            )
        );

        return $defaults[$carrier];
    }


    /**
     *  Get all terrif years for a given carrier
     *
     * @return array $defaults
     */
    public function getYears()
    {
        $years = \DB::table('rates')
            ->join('services', 'rates.service_id', '=', 'services.id')
            ->select('year')
            ->distinct()
            ->where('carrier', '=', $this->carrier)
            ->orderBy('year', 'desc')
            ->get();

        return $years;
    }

    /**
     *  Get all terrif years for a given carrier
     *
     * @return array $defaults
     */
    public function getServices()
    {
        $services = \DB::table('rates')
            ->join('services', 'rates.service_id', '=', 'services.id')
            ->select('services.name')
            ->distinct()
            ->where('carrier', '=', $this->carrier)
            ->where('year', '=', $this->year)
            ->orderBy('name', 'desc')
            ->get();

        return $services;
    }

    /**
     *  Compare rate sheets by
     * @param arrary $ratesA
     * @param arrary $ratesB
     * @param string $format ($ or %)
     * @return array $results
     */
    public function compareRates($ratesA, $ratesB, $format)
    {

        $dif = array();

        foreach ($ratesA as $weight => $zones) {
            foreach ($zones as $zone => $x) {

                $a = @$ratesA[$weight][$zone];
                $b = @$ratesB[$weight][$zone];


                if ($format == 'dollar' || $format == '') {
                    $d = $this->compareRatesByDollar($a, $b);
                } else {
                    $d = $this->compareRatesByPercent($a, $b);
                }

                $dif[$weight][$zone] = $d;
            }
        }

        return $dif;
    }


    function compareRatesByDollar($a, $b)
    {
        $amt = $a - $b;
        $neg = ($amt < 0 ? '-' : '');
        return $neg . '$' . number_format(abs($amt), 2);
    }


    function compareRatesByPercent($a, $b)
    {

        $dif = $a - $b;
        if ($dif != 0) {
            $change = ($dif / $a) * 100;
        } else {
            $change = 0;
        }
        return round($change, 2) . '%';
    }

}
