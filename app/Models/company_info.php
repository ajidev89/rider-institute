<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company_info extends Model
{
    use HasFactory;

    protected $fillable = [
        'Organization_name',
        'user_id',
        'address',
        'email',
        'phone_number',
        'country',
        'state',
        'L_G_A',
        'number_of_years',
        'Utility_bill',
        'Company_registration',
    ];
}
