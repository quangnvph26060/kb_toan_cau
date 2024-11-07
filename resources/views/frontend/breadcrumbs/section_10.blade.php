<div class="ladi-section-background"></div>
<div class="ladi-container">

    <div id="GALLERY17" class="ladi-element">
        <div class="ladi-gallery ladi-gallery-bottom">
            <div class="ladi-gallery-view">
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left opacity-0"></div>
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right opacity-0"></div>
                @foreach ($sliderHeader as $item)
                    <div class="ladi-gallery-view-item {{ $loop->first ? 'selected' : '' }}"
                        data-index="{{ $loop->index }}" style="background-image: url({{ showImage($item->image) }}">
                    </div>
                @endforeach

            </div>
            <div class="ladi-gallery-control">
                <div class="ladi-gallery-control-box">
                    @foreach ($sliderHeader as $slider)
                        <div class="ladi-gallery-control-item {{ $loop->first ? 'selected' : '' }}" data-index="{{ $loop->index }}" style="background-image: url({{ showImage($slider->image) }})"></div>
                    @endforeach
                </div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left opacity-0"></div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right opacity-0"></div>
            </div>
        </div>
    </div>
</div>
