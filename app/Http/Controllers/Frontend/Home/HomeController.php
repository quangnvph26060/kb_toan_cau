<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Models\Banner;
use App\Models\Config;
use App\Models\Slider;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserPhoneNumberNotification;

class HomeController extends Controller
{
    public function index()
    {
        $sliderHeader = Slider::getType('header')->latest()->get();

        $sliderBody = Slider::getType('body')->latest()->get();

        $banner = Banner::first();
        return view('frontend.layouts.master', compact('sliderHeader', 'sliderBody', 'banner'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => ['required', 'regex:/^(03|05|07|08|09)[0-9]{8}$/'],
            'message' => 'nullable|string|max:1000',
        ]);


        // Kiểm tra nếu số điện thoại đã gửi liên hệ trong vòng 5 phút trước
        $recentContact = Contact::where('phone', $validated['phone'])
            ->where('created_at', '>=', Carbon::now()->subMinutes(5))
            ->first();

        if ($recentContact) {

            return response()->json([
                'status' => false,
                'message' => 'Bạn đã gửi liên hệ trong vòng 5 phút trước. Vui lòng chờ thêm.',
            ]);
        }

        Contact::updateOrCreate(
            ['phone' => $validated['phone']],
            [
                'name' => $validated['name'],
                'message' => $validated['message'],
                'created_at' => Carbon::now(),
            ]
        );


        // Gửi email sau khi tạo/cập nhật liên hệ
        Mail::send(new UserPhoneNumberNotification($validated['phone'], $validated['name']));

        return response()->json(['status' => true]);
    }
}
