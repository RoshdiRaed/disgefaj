<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon_path',
        'proficiency_percentage',
        'gradient_colors',
        'proficiency_text',
    ];
}
