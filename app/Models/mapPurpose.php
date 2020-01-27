<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mapPurpose extends Model
{
    protected $table = 'hospital.les.mapPurpose';

    protected $fillable = [
        'id',
        'purpose',
        'glnumber',
    ];
}
