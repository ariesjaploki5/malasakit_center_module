<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hperson extends Model
{
    protected $table = 'hospital.dbo.hperson';

    public function hpdafs()
    {
        return $this->hasMany('App\Models\Hpdaf', 'hpercode', 'hpercode');
    }    

    public function guarantee_letter_2018s(){
        return $this->hasMany('App\Models\GuaranteeLetter2018', 'hpercode', 'hpercode');
    }
}
