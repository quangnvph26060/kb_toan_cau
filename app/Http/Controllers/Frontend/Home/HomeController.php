<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Models\Banner;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        $banner = Banner::first();
        return view('frontend.layouts.master', compact('sliders', 'banner'));
    }
}
