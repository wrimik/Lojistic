<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{

    protected $table = 'rates';
    public $timestamps = false;

    protected $inputQuery = [];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    /**
     * Just get one set of carrier rates
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $input
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGetCarrierRates($query, $input)
    {
        $request = new Request();
        return $query->getRatesForComparison($request->all());
    }

    /**
     * Get our builder setup inoformely to compare rates
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $input
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGetRatesForComparison($query, $input)
    {
        return $query->applyDiscounts($input)
            ->whereHas('service', function($q) use ($input)
            {
                $q->where('name', @$input['type'])->where('carrier', @$input['carrier']);
            })
            ->where('year',urldecode(@$input['year']))
            ->orderBy('weight','asc')
            ->orderBy('zone', 'asc');
    }

    /**
     * Applies blankent % discount and minimum charges to rates
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $input
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeApplyDiscounts($query, array $input)
    {
        $query->select('zone','weight','year');

        if(@$input['tier'] != '' || @$input['minimum'] != '' || isset($input['advanced']) || @  $input['general'] != '')
        {
            if(isset($input['advanced']))
            {
                $query->discountByWeight($input);
            }
            else
            {
                $query->generalDiscount($input);
            }
        } else
        {
            $query->addSelect('price');
        }

        return $query->addSelect(\DB::raw('CONCAT(weight, "-", zone) as wz'));
    }


    public function scopeDiscountByWeight($query, $input)
    {
        $discountArray = $this->createDiscountsByWeight($input);

        if(count($discountArray) > 0)
        {
            $minimum = $input['minimum'] != '' ? $input['minimum'] : 0;
            $queryString = "CASE";
            foreach($discountArray as $discount => $weights)
            {
                $price = (100 - $discount)/100;
                $discountedWeights = '('.implode(', ', $weights). ')';
                $queryString .= " WHEN weight IN $discountedWeights THEN IF($price * price > $minimum, $price * price, $minimum)";
            }

            $queryString .= "ELSE IF(price > $minimum, price, $minimum) END as price";
        } else {
            $queryString = 'price as price';
        }

        return $query->addSelect(\DB::raw($queryString));
    }

    /**
     * Create a multi dimensional array as [discount% => [weight1, weight2], discount%, => [weight3, weight4]]
     * @param $input
     *
     * @return array
     */
    private function createDiscountsByWeight($input)
    {
        $discountedWeights = [];
        $tierDiscount = $input['tier'] != '' ? $input['tier'] : 0;
        foreach($input['discounts'] as $weight => $discount)
        {
            if(strlen($discount) > 0)
            {
                $minMax = explode('-', $weight);
                if(!isset($minMax[1])) $minMax[1] = 0;
                for($i = $minMax[0]; $i <= $minMax[1]; $i++)
                {
                    @$discountedWeights[$discount+$tierDiscount][] = (int) $i;
                }
            }
        }
        return $discountedWeights;
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $input
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGeneralDiscount($query, array $input)
    {
        $general = $input['general'] != '' ? $input['general'] : 0;

        $price = (100 - $general)/100;
        $minimum = $input['minimum'] != '' ? $input['minimum'] : 0;

        return $query->addSelect(\DB::raw("ROUND(IF(($price * price) > $minimum, ($price * price), $minimum), 2) as price"));
    }

}
