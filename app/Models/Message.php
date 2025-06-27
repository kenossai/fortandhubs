<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'subject', 'message', 'favorite', 'reply', 'replied_at'];

    protected $casts = [
        'favorite' => 'boolean',
        'replied_at' => 'datetime',
    ];
}
