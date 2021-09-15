<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'price',
        'name_of_job',
        'number_of_job',
        'week',
        'credit',
        'verification',
        'ReferenceCode',
    ];
}
