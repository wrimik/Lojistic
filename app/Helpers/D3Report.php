<?php

namespace App\Helpers;

/**
 * Helps format data into d3 expected format
 * Class D3Report
 * @package App\Helpers
 */
class D3Report
{

    public $columns = [];
    public $sets = [];

    /**
     * Defines keys
     * @param $array
     */
    public function setColumns($array)
    {
        $this->columns = array_unshift($array, 'x');
    }

    /**
     * Formats and appends data to data sets
     * @param $label
     * @param $rawData
     */
    public function addDataSet($label, $rawData)
    {
        if($this->columns == [])
        {
            abort(500, 'You must set the columns before setting the data... because formatting magic.');
        }
        $data = $this->assertColumns($rawData);
        $set  = array_unshift($data, $label);
        array_push($this->sets, $set);
    }


    public function assertColumns($rawData)
    {
        $data = [];
        foreach($this->columns as $col)
        {
            isset($rawData[$col]) ? $data[$col] = $this->float($rawData[$col]) : $data[$col] = 0;
        }
        return $data;
    }

    public static function float($val)
    {
        return floatval(str_replace(['$', ','], '', $val));
    }


    /**
     * Expects an array of dates like
     * [
     *      [$key => '2016-01-05 12:59:59'],
     *      [$key => '2016-02-05 12:59:59'],
     * ]
     * returns array like
     * [
     *      [ 'Jan 16' => 10],
     *      [ 'Feb 16' => 0],
     *      [ 'Mar 16' => 30],
     *      [ 'Apr 16' => 20],
     * ]
     * @param $key
     * @param $dates
     */
    public function monthOverMonth($key, $dates)
    {
        $counter = [];
        $output  = [];
        $start = false; //capture lowest and highest
//        $end= time(); //so we can later create any empty keys
        foreach($dates as $date)
        {
            $ts = strtotime($date[$key]);
            $ts < $start || !$start ? $start = $ts : null; //set lowest if lowest  (for date range)
//            $ts > $end ? $end = $ts : null;//set highest if highest (for date range)
            $group = date('M y', $ts);
            isset($counter[$group]) ? $counter[$group] ++ : $counter[$group] = 1;
        }
        //we have our data, we just need to set the keys in order and create keys for any null values;
        return $this->createDateRangeArrayUsingData($start, time(), $counter);
    }


    /**
     * takes partial array like
     * [
     *      ['Jan 16', 6],
     *      //input missing feb, mar, apr
     *      ['May 16', 6],
     * ]
     * and fills in gaps for missing months
     * @param $lowest
     * @param $highest
     */
    private function createDateRangeArrayUsingData($lowest, $highest, $data)
    {
        $output = [];
        for($i = $lowest; $i <= $highest; $i = strtotime('+1 month', $i))
        {
            $key = date('M y', $i);
            isset($data[$key]) ? $output[$key] = $data[$key] : $output[$key] = 0;
        }
        $this->setColumns(array_keys($output));
        return $output;
    }


}