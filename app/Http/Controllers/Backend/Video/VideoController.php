<?php

namespace App\Http\Controllers\Backend\Video;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    function create()
    {
        $title = 'Cấu Hình Slider Video';
        $videos = Video::latest()->get();
        return view('backend.video.create', compact('title', 'videos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'link' => 'required|array',
            'link.*' => 'required',
        ]);


        foreach ($validated['link'] as $id => $link) {

            Video::updateOrCreate(
                ['id' => $id],
                ['link' => $link]
            );
        }

        if ($request->deleted_video_ids) {
            foreach ($request->deleted_video_ids as $id) {
                $video = Video::find($id);
                $video->delete();
            }
        }

        return redirect()->back();
    }
}
