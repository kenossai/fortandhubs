<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'career_id',
        'name',
        'email',
        'why_apply',
        'project_pride',
        'portfolio',
        'salary_expectation',
        'cv',
        'career_id',
    ];
}
