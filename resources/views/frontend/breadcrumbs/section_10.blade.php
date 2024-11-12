{{-- <div class="ladi-section-background"></div>
<div class="ladi-container">
    <div id="GALLERY17" class="ladi-element">
        <div class="ladi-gallery ladi-gallery-bottom">
            <div class="ladi-gallery-view">
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left opacity-0"></div>
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right opacity-0"></div>

                @foreach ($sliderHeader as $sh)
                    <div class="ladi-gallery-view-item {{ $loop->first ? 'selected' : '' }}" data-index="{{ $loop->index }}" style="background-image: url({{ showImage($sh->image) }});"></div>
                @endforeach
                <div class="ladi-gallery-view-item selected" data-index="0"></div>

            </div>
            <div class="ladi-gallery-control" style="display: none;">
                <div class="ladi-gallery-control-box">
                    <div class="ladi-gallery-control-item selected" data-index="0"></div>
                    @foreach ($sliderHeader as $item)
                        <div class="ladi-gallery-control-item {{ $loop->first ? 'selected' : '' }}" data-index="{{ $loop->index }}"></div>
                    @endforeach
                </div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left opacity-0"></div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right opacity-0"></div>
            </div>
        </div>
    </div>
</div> --}}

<div class="ladi-section-background"></div>
<div class="ladi-container">

    <div id="GALLERY17" class="ladi-element">
        <div class="ladi-gallery ladi-gallery-bottom">
            <div class="ladi-gallery-view">
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left opacity-0" style="display: none"></div>
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right opacity-0" style="display: none"></div>

                @foreach ($sliderV4 as $item)
                    <div class="ladi-gallery-view-item {{ $loop->first ? 'selected' : '' }}"
                        data-index="{{ $loop->index }}"
                        style="background-image: url({{ showImage($item->image) }});">
                    </div>
                @endforeach

            </div>

            <div class="ladi-gallery-control" style="display: none;">
                <div class="ladi-gallery-control-box">
                    @foreach ($sliderV4 as $key => $s4)
                        <div class="ladi-gallery-control-item {{ $loop->first ? 'selected' : '' }}"
                            data-index="{{ $key }}"></div>
                    @endforeach
                </div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left opacity-0"></div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right opacity-0"></div>
            </div>

        </div>
    </div>

</div>
