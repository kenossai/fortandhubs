<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'image_path',
        'slug',
        'client_name',
        'category',
        'status',
        'project_year',
        'location',
        'duration',
        'price',
        'project_approach',
        'link',
    ];

    protected $casts = [
        'image_path' => 'array',
        'project_approach' => 'array',
    ];

}
