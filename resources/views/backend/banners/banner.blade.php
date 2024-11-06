@extends('backend.layouts.master')

@section('title', $title)

@section('content')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
        </div>

        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row ">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <img class="img-fluid img-thumbnail w-75" id="show_image_i20"
                                style="max-height: 100%; cursor: pointer"
                                src="{{showImage($banner->image_i20)}}" alt=""
                                onclick="document.getElementById('image_i20').click();">
                            <input type="file" name="image_i20" id="image_i20" class="form-control d-none"
                                accept="image/*" onchange="previewImage(event, 'show_image_i20')">
                        </div>

                        <div class="mb-3">
                            <img class="img-fluid img-thumbnail w-75" id="show_image_i34"
                                style="max-height: 100%; cursor: pointer"
                                src="{{showImage($banner->image_i34)}}" alt=""
                                onclick="document.getElementById('image_i34').click();">
                            <input type="file" name="image_i34" id="image_i34" class="form-control d-none"
                                accept="image/*" onchange="previewImage(event, 'show_image_i34')">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <img class="img-fluid img-thumbnail w-75" id="show_image_i52"
                                style="max-height: 60px; cursor: pointer"
                                src="{{showImage($banner->image_i52, 'chat-bg-pattern.png')}}" alt=""
                                onclick="document.getElementById('image_i52').click();">
                            <input type="file" name="image_i52" id="image_i52" class="form-control d-none"
                                accept="image/*" onchange="previewImage(event, 'show_image_i52')">
                        </div>

                        <div class="mb-3">
                            <img class="img-fluid img-thumbnail w-75" id="show_image_i23"
                                style="max-height: 100%; cursor: pointer"
                                src="{{showImage($banner->image_i23, 'chat-bg-pattern.png')}}" alt=""
                                onclick="document.getElementById('image_i23').click();">
                            <input type="file" name="image_i23" id="image_i23" class="form-control d-none"
                                accept="image/*" onchange="previewImage(event, 'show_image_i23')">
                        </div>

                        <div class="mb-3">
                            <img class="img-fluid img-thumbnail w-75" id="show_image_i21"
                                style="max-height: 100%; cursor: pointer"
                                src="{{showImage($banner->image_i21, 'chat-bg-pattern.png')}}" alt=""
                                onclick="document.getElementById('image_i21').click();">
                            <input type="file" name="image_i21" id="image_i21" class="form-control d-none"
                                accept="image/*" onchange="previewImage(event, 'show_image_i21')">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>

@endsection
