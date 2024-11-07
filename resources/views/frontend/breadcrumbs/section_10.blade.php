<div class="ladi-section-background"></div>
<div class="ladi-container">

    <div id="GALLERY17" class="ladi-element">
        <div class="ladi-gallery ladi-gallery-bottom">
            <div class="ladi-gallery-view">
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left opacity-0"></div>
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right opacity-0"></div>
                @foreach ($sliderHeader as $item)
                    <div class="ladi-gallery-view-item {{ $loop->first ? 'selected' : '' }}"
                        data-index="{{ $loop->index }}" style="background-image: url({{ showImage($item->image) }});">
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
