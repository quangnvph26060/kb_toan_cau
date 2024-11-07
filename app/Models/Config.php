<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'icon',
        'title_seo',
        'description_seo',
        'keywords_seo',
        'hotline',
        'tax_code'
    ];

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}