<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'bkg_id',
        'name',
        'room_type',
        'total_numbers',
        'date',
        'time',
        'depature_date',
        'email',
        'ph_number',
        'fileupload',
        'message',
    ];
}
