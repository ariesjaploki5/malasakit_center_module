<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IntranetActlog extends Model
{
    protected $table = 'hospital.jhay.intranet_actlog';

    protected $fillable = [
        'employeeid',
        'act_details',
    ];


}
