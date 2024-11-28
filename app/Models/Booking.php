<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Add fillable or guarded properties depending on your requirements
    protected $fillable = [
        'departure',
        'destination',
        'travel_date',
        'class',
        'train_name',
        'seat_number',
        // Add other fields as needed
    ];
}
