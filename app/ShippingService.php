<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Swiss;

class ShippingService extends Model
{
    protected $with = ['rates'];

    /**
     * Limits results to those belonging to given service
     * @param $query
     * @param $carrier
     * @param $name
     * @param $year
     * @return mixed
     */
    public function scopeByTariff($query, $array)
    {
        return $query->where('carrier', '=', $array['carrier'])
                     ->where('name', '=', $array['name']);
    }

    public function rates()
    {
        return $this->hasMany('App\ShippingRate');
    }

    /**
     * @param $a
     * @param $b
     * @return array
     */
    public static function compare($a, $b)
    {
        $o = array();
        for($weight = 0; $weight <= 150; $weight++)
        {
            for($zone = 2; $zone <= 8; $zone++)
            {
                $o[$weight][$zone]['discountedPrice'] = @$a[$weight][$zone]['discountedPrice'] - @$b[$weight][$zone]['discountedPrice'];
                $o[$weight][$zone]['percentage'] = Swiss::toReversePercentage(@$a[$weight][$zone]['discountedPrice'], @$b[$weight][$zone]['discountedPrice'], 2);
            }
        }
        return $o;
    }

    public function importRates($data, $year)
    {
        $data = str_replace("\r", "\n", $data); //fucking excel. who uses \r for anything!?
        $data = str_replace("\r\n", "\n", $data);
        $lines = explode("\n", $data);
        $numZones = 0;
        foreach($lines as $key => $line)
        {
            $cells = explode("\t", $line);
            if($key == 0)
            {// zones
                $zones = $cells;
                $numZones = sizeof($zones);
            }else
            {// regular line
                foreach($zones as $col => $zone)
                {
                    $this->rates()->create([
                        'weight' => $cells[0],
                        'zone' => trim(str_replace('Zone ', '', $zone)),
                        'price' => str_replace(['$', ','], '', $cells[$col]),
                        'year' => $year
                    ]);
                }
            }
        }
    }
}
