@extends('backend.layouts.master')

@section('title', $title)


@section('content')

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ $title }}</h4>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div id="video-container">
                    @php
                        $oldVideos = old('link', $videos->pluck('link')->toArray());
                    @endphp

                    @if (empty($oldVideos))
                        <div class="video-item row mb-3">
                            <div class="col-lg-11">
                                <input type="text" class="form-control" name="link[1]" placeholder="Link video" />
                                @error('link.0')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-1">
                                <button type="button" class="btn btn-success add-video">+</button>
                            </div>
                        </div>
                    @else
                        @foreach ($oldVideos as $index => $oldLink)
                            <div class="video-item row mb-3">
                                <div class="col-lg-11">
                                    <!-- Gán data-id bằng ID của video nếu có (giả sử ID là $video->id) -->
                                    <input type="text" class="form-control" name="link[{{$videos[$index]->id ?? ''}}]" placeholder="Link video"
                                        value="{{ $oldLink }}" data-id="{{ $videos[$index]->id ?? '' }}" />

                                    @error('link.' . $index)
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-1">
                                    @if ($loop->first)
                                        <button type="button" class="btn btn-success add-video">+</button>
                                    @else
                                        <button type="button" class="btn btn-danger remove-video">-</button>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.add-video').on('click', function() {
                const videoItem = `
            <div class="video-item row mb-3">
                <div class="col-lg-11">
                    <input type="text" class="form-control" name="link[]" placeholder="Link video" />
                </div>
                <div class="col-lg-1">
                    <button type="button" class="btn btn-danger remove-video">-</button>
                </div>
            </div>`;

                $('#video-container').append(videoItem);
            });

            // Event listener for removing a branch row
            // In ra ID video khi xóa
            $('#video-container').on('click', '.remove-video', function() {
                const videoItem = $(this).closest('.video-item');
                const videoId = videoItem.find('input[name^="link"]').data('id');

                console.log(videoId); // Giờ đây, giá trị này sẽ hiển thị ID thay vì undefined

                if (videoId) {
                    $('<input>').attr({
                        type: 'hidden',
                        name: 'deleted_video_ids[]',
                        value: videoId
                    }).appendTo('form');
                }
                videoItem.remove();
            });

        });
    </script>
@endpush
