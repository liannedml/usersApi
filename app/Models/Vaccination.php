<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    protected $fillable = [
        'name',
        'age',
        'vaccine_type',
        'vaccination_date',
        'dose_number'
    ];
}