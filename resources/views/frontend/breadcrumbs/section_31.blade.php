<div class="ladi-section-background"></div>
<div class="ladi-container">

    <div id="BUTTON31" class="ladi-element">
        <div class="ladi-button">
            <div class="ladi-button-background"></div>
            <div id="BUTTON_TEXT31" class="ladi-element ladi-button-headline">
                <p class="ladi-headline">
                    ĐỊA CHỈ UY TIN&nbsp;<br />ĐƯỢC NHIỀU KHÁCH HÀNG TIN TƯỞNG
                </p>
            </div>
        </div>
    </div>

    <div class="video-container">

        {!! $videos->first()->link !!}

        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/G3IE0CauyCs?si=58P1Ff2lxHvGA-QO"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}

        <div class="swiper-container video-list">
            <div class="swiper-wrapper video-items">
                <!-- Video Thumbnails as Swiper Slides -->


                @foreach ($videos as $video)
                    @php
                        // Lấy iframe_code từ bản ghi
                        $iframeCode = $video->link;

                        // Tìm video ID bằng Regex
                        preg_match('/embed\/([^?]+)/', $iframeCode, $matches);

                        preg_match('/src="([^"]+)"/', $iframeCode, $matches2);

                        // Lấy video ID nếu tìm thấy
                        $videoId = $matches[1] ?? null;
                        $src = $matches2[1] ?? null;
                    @endphp

                    @if ($videoId)
                        <div class="swiper-slide video-item" data-video="{{ $src }}">
                            <img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                alt="Video {{ $video->id }}" />
                        </div>
                    @endif
                @endforeach
                {{-- <div class="swiper-slide video-item" data-video="https://www.youtube.com/embed/r-fNMMqbd2A">
                    <img src="https://img.youtube.com/vi/r-fNMMqbd2A/hqdefault.jpg" alt="Video 2" />
                </div>
                <div class="swiper-slide video-item" data-video="https://www.youtube.com/embed/Mj5I2K7oQs0">
                    <img src="https://img.youtube.com/vi/Mj5I2K7oQs0/hqdefault.jpg" alt="Video 3" />
                </div>
                <div class="swiper-slide video-item" data-video="https://www.youtube.com/embed/6zfSWcAqR7E">
                    <img src="https://img.youtube.com/vi/6zfSWcAqR7E/hqdefault.jpg" alt="Video 1" />
                </div>
                <div class="swiper-slide video-item" data-video="https://www.youtube.com/embed/r-fNMMqbd2A">
                    <img src="https://img.youtube.com/vi/r-fNMMqbd2A/hqdefault.jpg" alt="Video 2" />
                </div>
                <div class="swiper-slide video-item" data-video="https://www.youtube.com/embed/Mj5I2K7oQs0">
                    <img src="https://img.youtube.com/vi/Mj5I2K7oQs0/hqdefault.jpg" alt="Video 3" />
                </div>
                <div class="swiper-slide video-item" data-video="https://www.youtube.com/embed/6zfSWcAqR7E">
                    <img src="https://img.youtube.com/vi/6zfSWcAqR7E/hqdefault.jpg" alt="Video 1" />
                </div>
                <div class="swiper-slide video-item" data-video="https://www.youtube.com/embed/r-fNMMqbd2A">
                    <img src="https://img.youtube.com/vi/r-fNMMqbd2A/hqdefault.jpg" alt="Video 2" />
                </div>
                <div class="swiper-slide video-item" data-video="https://www.youtube.com/embed/Mj5I2K7oQs0">
                    <img src="https://img.youtube.com/vi/Mj5I2K7oQs0/hqdefault.jpg" alt="Video 3" />
                </div> --}}
            </div>
        </div>
    </div>
</div>
