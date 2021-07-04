<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'vehicle_id',
        'name',
        'middlename',
        'surname',
        'national_id',
        'dob',
        'phone',
        'email',
        'id_number',
        'kra_pin',
        'county',
        'locality',
        'street',
        'apartment',
        'net_income',
    ];
}
