<div class="ladi-section-background"></div>
<div class="ladi-container">
    <div id="GALLERY19" class="ladi-element">
        <div class="ladi-gallery ladi-gallery-bottom">
            <div class="ladi-gallery-view">
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left"></div>
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right"></div>


                @foreach ($sliderV2 as $sb)
                    <div class="ladi-gallery-view-item {{ $loop->first ? 'selected' : '' }}"
                        data-index="{{ $loop->index }}"
                        style="background-image: url({{ showImage($sb->image) }}); height: 100%;"></div>
                @endforeach


            </div>
        </div>

        <div class="ladi-gallery-control">
            <div class="ladi-gallery-control-box">


                @foreach ($sliderV2 as $key => $item)
                    <div class="ladi-gallery-control-item {{ $loop->first ? 'selected' : '' }}"
                        data-index="{{ $key }}" style="background-image: url({{ showImage($item->image) }});">
                    </div>
                @endforeach


            </div>
            <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left opacity-0"></div>
            <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right"></div>
        </div>
    </div>


        <div id="IMAGE52" class="ladi-element">
            <div class="ladi-image">
                <div class="ladi-image-background" style="background-image: url({{ showImage($banner->image_i52) }})">
                </div>
            </div>
        </div>

</div>
