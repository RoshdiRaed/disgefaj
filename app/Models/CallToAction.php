<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallToAction extends Model
{
    protected $fillable = [
        'title',
        'description',
        'primary_button_text',
        'primary_button_url',
        'secondary_button_text',
        'secondary_button_url',
        'background_opacity',
        'border_color',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
?>
