<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'business_name',
        'start_date',
        'currency',
        'website',
        'mobile',
        'alternate_number',
        'division',
        'district',
        'upzila',
        'zip_code',
        'landarea',
        'surname',
        'logo',
        'first_name',
        'last_name',
    ];

    protected $casts = [
        'start_date' => 'datetime',
    ];
}
