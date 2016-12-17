<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Crypt;

class IntellishipUser extends Model
{

    public $timestamps = true;

    protected $fillable = [
        'contact_firstname',
        'contact_lastname',
        'contact_email',
        'contact_password',
        'phonebusiness',
        'contact_offercode',
        'contact_company',
        'contact_address1',
        'contact_address2',
        'contact_city',
        'contact_state',
        'contact_zip',
        'contact_country',
        'contact_fax',
        'upswebusername',
        'upswebuserpassword',
        'upswebaccount',
        'fedex_username',
        'fedex_password',
        'fedexwebaccount',
        'bill_address1',
        'bill_address2',
        'bill_city',
        'bill_state',
        'bill_zip',
        'bill_country',
    ];

    public function createdAt()
    {
        return $this->created_at->format('n/j/y');
    }

    public function getNameAttribute()
    {
        return $this->contact_firstname . ' ' . $this->contact_lastname;
    }

    public function setContactPasswordAttribute($password)
    {
        $this->attributes['contact_password'] = Crypt::encrypt($password);
    }

    public function setUpswebuserpasswordAttribute($password)
    {
        $this->attributes['upswebuserpassword'] = Crypt::encrypt($password);
    }

    public function setUpsPasswordAttribute($password)
    {
        $this->attributes['upswebuserpassword'] = Crypt::encrypt($password);
    }

    public function setFedexPasswordAttribute($password)
    {
        $this->attributes['fedex_password'] = Crypt::encrypt($password);
    }

//    public function getContactPasswordAttribute($password)
//    {
//        return Crypt::decrypt($password);
//    }
//
//    public function getUpsPasswordAttribute()
//    {
//        return Crypt::decrypt($this->upswebuserpassword);
//    }
//
//    public function getUpswebuserpasswordAttribute($password)
//    {
//        return Crypt::decrypt($password);
//    }
//
//    public function getFedexPasswordAttribute($password)
//    {
//        return Crypt::decrypt($password);
//    }

    public function setPhonebusinessAttribute($phone)
    {
        $this->attributes['phonebusiness'] = preg_replace('/[^0-9]/','',$phone);
    }

    public function hasUps()
    {
        return !empty($this->upswebusername) && !empty($this->upswebuserpassword) && !empty($this->upswebaccount);
    }

    public function hasFedex()
    {
        return !empty($this->fedex_username) && !empty($this->fedex_password) && !empty($this->fedexwebaccount);
    }

    public function getContactFullAddressAttribute()
    {
        return $this->contact_address1 .' '.$this->contact_address2.'<br />'.$this->contact_city.', '.$this->contact_state.' '.$this->contact_zip;
    }

}