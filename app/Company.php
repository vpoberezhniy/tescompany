<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;

    public function company()
    {
        return $this->hasOne('App\Employee');
    }
}
