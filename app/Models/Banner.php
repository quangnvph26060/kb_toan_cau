<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $table = 'sgo_config_banners';
    protected $fillable = [
        'image_i52',
        'image_i20',
        'image_i23',
        'image_i21',
        'image_i34',
        'business'
    ];
}
