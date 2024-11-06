<?php

namespace App\Http\Controllers\Backend\Banner;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Banner;

class BannerController extends Controller
{
    function showPageBanner()
    {
        $banner = Banner::first();
        $title = "Cấu Hình Banners";
        return view('backend.banners.banner', compact('title', 'banner'));
    }

    function store(Request $request)
    {
        $banner = Banner::first();

        $validated = $request->validate([
            'image_i34' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_i20' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_i52' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_i23' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_i21' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image_i34')) {
            deleteImage($banner->image_i34);
            $validated['image_i34'] = saveImages($request, 'image_i34', 'banners', 684, 684);
        }

        if ($request->hasFile('image_i21')) {
            deleteImage($banner->image_i21);
            $validated['image_i21'] = saveImages($request, 'image_i21', 'banners', 697, 1229);
        }

        if ($request->hasFile('image_i23')) {
            deleteImage($banner->image_i23);
            $validated['image_i23'] = saveImages($request, 'image_i23', 'banners', 750, 1160);
        }

        if ($request->hasFile('image_i20')) {
            deleteImage($banner->image_i20);
            $validated['image_i20'] = saveImages($request, 'image_i20', 'banners', 750, 2053);
        }

        if ($request->hasFile('image_i52')) {
            deleteImage($banner->image_i52);
            $validated['image_i52'] = saveImages($request, 'image_i52', 'banners', 1080, 134);
        }

        $banner->update($validated);

        return back();
    }
}
