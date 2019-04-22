<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;

//    public function employee()
//    {
//        return $this->hasOne('App\Company', 'company');
//    }
    public function companyEmployeer()
    {
        return $this->belongsTo('App\Company','company');
    }
}
