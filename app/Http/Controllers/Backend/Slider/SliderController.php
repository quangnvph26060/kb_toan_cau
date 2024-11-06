<?php

namespace App\Http\Controllers\Backend\Slider;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Cấu Hình Trình Chiếu';
        $sliders = Slider::latest()->get();

        return view('backend.sliders.create', compact('title', 'sliders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return response()->json(['message' => 'Slider not found'], 404);
        }

        deleteImage($slider->image);
        $slider->delete();

        return response()->json(['message' => 'success'], 200);
    }

    public function uploadImage(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], 400);
        }

        DB::beginTransaction();
        $image = saveImages($request, 'file', 'sliders', 800, 800);
        try {
            if ($request->hasFile('file')) {
                if ($image) {
                    $imagePath = Slider::create([
                        'image' => $image,
                    ]);
                }
                DB::commit();

                return response()->json(['message' => 'success', 'image' => showImage($image), 'size' => getSize($image), 'id' => $imagePath->id], 200);
            }
        } catch (\Exception $e) {
            if ($image) {

                deleteImage($image);
            }

            DB::rollBack();

            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
