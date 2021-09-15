<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{
    use HasFactory;

    protected $fillable = [
        'surname',
        // 'user_id',
        'firstName',
        'country',
        'State_of_Residence',
        'L_G_A',
        'address',
        'Telephone_Number',
        'NIN_number',
        'Date_of_Birth',
        'Specify_agent',
        'number_of_years',
        'riding/driving',
        'hailing/dispatcher',
        'license/Ridercard',
        'date_of_first_issuance',
        'nin_doc',
        'cv_doc',
        'riders_card_doc',
        'driver_license_doc',
        'utility_bills_doc',
        'educational_background',
        'english_proficiency'
    ];

}
