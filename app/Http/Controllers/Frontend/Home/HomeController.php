<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Models\Video;
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
        $sliderV1 = Slider::getType('v1')->latest()->get();

        $sliderV2 = Slider::getType('v2')->latest()->get();

        $sliderV3 = Slider::getType('v3')->latest()->get();

        $sliderV4 = Slider::getType('v4')->latest()->get();

        $banner = Banner::first();

        $videos = Video::latest()->get();
        return view('frontend.layouts.master', compact('sliderV1', 'sliderV2', 'sliderV3', 'sliderV4', 'videos', 'banner'));
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
        // Mail::send(new UserPhoneNumberNotification($validated['phone'], $validated['name']));

        return response()->json(['status' => true, 'message' => 'Chung tôi sẽ liên hệ với bạn trong thời gian sơms nhất.']);
    }
}
