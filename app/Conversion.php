<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversion extends Model
{

    protected $table = 'conversions';

    protected $fillable = ['first_name', 'last_name', 'hubspot_utk', 'company', 'email', 'phone','additional_info','page'];

    public $timestamps = true;


    public static function boot()
    {
        parent::boot();

        static::saving(function($user){
            $user->stripPhones();
        });
    }

    public function scopeYoy($query)
    {
        return $query->test();
    }

    public function stripPhones()
    {
        $this->phone = str_replace(['(',')','-',' '],['','','',''],$this->phone);
    }
}
