<div class="ladi-section-background"></div>
<div class="ladi-container">
    <div id="GALLERY20" class="ladi-element">
        <div class="ladi-gallery ladi-gallery-bottom">
            <div class="ladi-gallery-view">
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left opacity-0"></div>
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right opacity-0"></div>

                @foreach ($sliderV3 as $s3)
                    <div class="ladi-gallery-view-item {{ $loop->first ? 'selected' : '' }}"
                        data-index="{{ $loop->index }}"
                        style="height: 100% !important; background-image: url({{ showImage($s3->image) }});"></div>
                @endforeach
            </div>
            <div class="ladi-gallery-control" style="display: none">
                <div class="ladi-gallery-control-box">
                    @foreach ($sliderV3 as $item)
                        <div class="ladi-gallery-control-item {{ $loop->first ? 'selected' : '' }}" data-index="{{ $loop->index }}" style="background-image: url({{ showImage($item->image) }}}"></div>
                    @endforeach
                </div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left opacity-0"></div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right opacity-0"></div>
            </div>
        </div>
    </div>
</div>
