<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'coming_from',
        'amount_to_pay'
    ];
}
