<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'status',
        'technologies',
        'rating',
        'reviews_count',
        'image_path', // استبدال icon_svg بـ image_path
        'gradient_colors',
        'action_text',
        'action_url',
    ];

    protected $casts = [
        'technologies' => 'array',
    ];
}
