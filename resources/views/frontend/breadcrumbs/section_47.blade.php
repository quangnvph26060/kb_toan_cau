<div class="ladi-section-background"></div>
<div class="ladi-container">
    <div id="GALLERY19" class="ladi-element">
        <div class="ladi-gallery ladi-gallery-bottom">
            <div class="ladi-gallery-view">
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left opacity-0"></div>
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right opacity-0"></div>

                @foreach ($sliderBody as $sb)
                    <div class="ladi-gallery-view-item {{ $loop->first ? 'selected' : '' }}" data-index="{{ $loop->index }}" style="background-image: url({{ showImage($sb->image) }}"></div>
                @endforeach

            </div>
            <div class="ladi-gallery-control">
                <div class="ladi-gallery-control-box">

                    @foreach ($sliderBody as $sb)
                        <div class="ladi-gallery-control-item" {{ $loop->first ? 'selected' : '' }} data-index="{{ $loop->index }}" style="background-image: url({{ showImage($sb->image) }}"></div>
                    @endforeach
                </div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left opacity-0"></div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right opacity-0"></div>
            </div>
        </div>
    </div>
    <div id="IMAGE52" class="ladi-element">
        <div class="ladi-image">
            <div class="ladi-image-background" style="background-image: url({{ showImage($banner->image_i52) }}"></div>

        </div>
    </div>
</div>
