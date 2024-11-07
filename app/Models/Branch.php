<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'config_id',
        'name',
        'address'
    ];

    public function config()
    {
        return $this->belongsTo(Config::class);
    }

    protected $casts = [
        'address' => 'array'
    ];
}
