<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuaranteeLetter2018 extends Model
{
    protected $table = 'hospital.les.guaranteeLetter2018';

    protected $fillable = [
        'glnumber', 'ctrlno', 'hpercode', 'fundcode', 'refdate', 'expdate', 'amount', 'purpose',
        'entryby', 'glstat', 'dtCreated', 'edited', 'id'
    ];

    public function hperson(){
        return $this->belongsTo('App\Models\Hperson', 'hpercode', 'hpercode');
    }
}
