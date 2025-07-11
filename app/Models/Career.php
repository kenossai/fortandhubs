<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'location', 'type', 'status', 'deadline',
    ];

    protected static function booted()
    {
        static::creating(function ($career) {
            $career->slug = Str::slug($career->title);
        });

        static::updating(function ($career) {
            if ($career->isDirty('title')) {
                $career->slug = Str::slug($career->title);
            }
        });
    }
}
