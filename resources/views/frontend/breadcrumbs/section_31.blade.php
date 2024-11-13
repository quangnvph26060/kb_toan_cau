<div class="ladi-section-background"></div>
<div class="ladi-container">

    <div id="BUTTON31" class="ladi-element">
        <div class="ladi-button">
            <div class="ladi-button-background"></div>
            <div id="BUTTON_TEXT31" class="ladi-element ladi-button-headline">
                <p>
                    <img style="width: 90px" src="{{ asset('frontend/assets/images/VTV.png') }}" alt="">
                </p>
                <p class="ladi-headline" style="color: #ffffff !important">
                    NÓI VỀ CHÚNG TÔI
                </p>
            </div>
        </div>
    </div>

    <div class="video-container">

        {{-- {!! $videos->first()->link !!} --}}

        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{getYouTubeVideoId($videos->first()->link)}}"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <div class="swiper-container video-list">
            <div class="swiper-wrapper video-items">

                @foreach ($videos as $video)
                        <div class="swiper-slide video-item" data-video="https://www.youtube.com/embed/{{getYouTubeVideoId($video->link)}}">
                            <img src="https://img.youtube.com/vi/{{ getYouTubeVideoId($video->link) }}/hqdefault.jpg"
                                alt="Video {{ $video->id }}" />
                        </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
