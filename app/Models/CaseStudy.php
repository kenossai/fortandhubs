<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CaseStudy extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'subtitle',
        'client',
        'date',
        'role',
        'overview',
        'visit_url',
        'banner_image',
        'gallery',
        'about_project',
        'approach',
        'conversion_increase',
        'traffic_increase',
        'daily_signups',
    ];

    protected $casts = [
        'gallery' => 'array',
        'date' => 'date',
    ];

    protected static function booted()
    {
        static::creating(function ($caseStudy) {
            $caseStudy->slug = Str::slug($caseStudy->title);
        });

        static::updating(function ($caseStudy) {
            $caseStudy->slug = Str::slug($caseStudy->title);
        });
    }

}
