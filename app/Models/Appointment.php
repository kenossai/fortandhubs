<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'appointment_date',
        'is_approved',
        'is_favorite',
    ];
}
