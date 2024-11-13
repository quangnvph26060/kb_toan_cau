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
        'banner',
        'title_seo',
        'description_seo',
        'keywords_seo',
        'hotline',
        'tax_code',
        'address',
        'link_fb',
        'link_video_v1',
        'link_video_v2',
        'link_video_main',
        'link_video_v3',
        'shorts_video_v1',
        'shorts_video_v2',
        'custom_header'
    ];

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
