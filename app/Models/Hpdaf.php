<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hpdaf extends Model
{
    protected $table = 'hospital.dbo.hpdaf';

    protected $fillable = [
        'enccode', 'refdate', 'fundcode', 'amount', 'ctrlno', 'hpercode', 'entryby',
        'expdate', 'purpose', 'total', 'trandate', 'usedamount', 'mode', 'glstat', 'id',
    ];

    public function hperson(){
        return $this->belongsTo('App\Models\Hperson', 'hpercode', 'hpercode');
    }
}
