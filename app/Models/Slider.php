<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sgo_config_sliders';
    protected $fillable = [
        'image',
        'type'
    ];

    public function scopeGetType($query, $type)
    {
        return $query->where('type', $type);
    }
}
