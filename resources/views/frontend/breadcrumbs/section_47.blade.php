<div class="ladi-section-background"></div>
<div class="ladi-container">
    <div id="GALLERY19" class="ladi-element" >
        <div class="ladi-gallery ladi-gallery-bottom">
            <div class="ladi-gallery-view">
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left"></div>
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right"></div>

                @foreach ($sliderBody as $sb)
                    <div class="ladi-gallery-view-item {{ $loop->first ? 'selected' : '' }}"
                        data-index="{{ $loop->index }}"
                        style="background-image: url({{ showImage($sb->image) }}); height: 100%;"></div>
                @endforeach

            </div>
        </div>

        <div class="ladi-gallery-control">
            <div class="ladi-gallery-control-box">

                @foreach ($sliderBody as $item)
                    <div class="ladi-gallery-control-item {{ $loop->first ? 'selected' : '' }}"
                        data-index="{{ $loop->index }}" style="background-image: url({{ showImage($item->image) }});"></div>
                @endforeach
            </div>
            <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left opacity-0"></div>
            <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right"></div>
        </div>
    </div>

    <div id="IMAGE52" class="ladi-element">
        <div class="ladi-image">
            <div class="ladi-image-background" style="background-image: url({{ showImage($banner->image_i52) }})"></div>
        </div>
    </div>
</div>



    {{-- <div class="ladi-section-background"></div>
    <div class="ladi-container">
      <div id="GALLERY19" class="ladi-element">
        <div class="ladi-gallery ladi-gallery-bottom">
          <div class="ladi-gallery-view">
            <div
              class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left opacity-0"
            ></div>
            <div
              class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right opacity-0"
            ></div>
            <div
              class="ladi-gallery-view-item selected"
              data-index="0"
            ></div>
            <div class="ladi-gallery-view-item" data-index="1"></div>
            <div class="ladi-gallery-view-item" data-index="2"></div>
            <div class="ladi-gallery-view-item" data-index="3"></div>
            <div class="ladi-gallery-view-item" data-index="4"></div>
            <div class="ladi-gallery-view-item" data-index="5"></div>
            <div class="ladi-gallery-view-item" data-index="6"></div>
            <div class="ladi-gallery-view-item" data-index="7"></div>
            <div class="ladi-gallery-view-item" data-index="8"></div>
            <div class="ladi-gallery-view-item" data-index="9"></div>
            <div class="ladi-gallery-view-item" data-index="10"></div>
            <div class="ladi-gallery-view-item" data-index="11"></div>
            <div class="ladi-gallery-view-item" data-index="12"></div>
            <div class="ladi-gallery-view-item" data-index="13"></div>
            <div class="ladi-gallery-view-item" data-index="14"></div>
            <div class="ladi-gallery-view-item" data-index="15"></div>
            <div class="ladi-gallery-view-item" data-index="16"></div>
          </div>
          <div class="ladi-gallery-control">
            <div class="ladi-gallery-control-box">
              <div
                class="ladi-gallery-control-item selected"
                data-index="0"
              ></div>
              <div class="ladi-gallery-control-item" data-index="1"></div>
              <div class="ladi-gallery-control-item" data-index="2"></div>
              <div class="ladi-gallery-control-item" data-index="3"></div>
              <div class="ladi-gallery-control-item" data-index="4"></div>
              <div class="ladi-gallery-control-item" data-index="5"></div>
              <div class="ladi-gallery-control-item" data-index="6"></div>
              <div class="ladi-gallery-control-item" data-index="7"></div>
              <div class="ladi-gallery-control-item" data-index="8"></div>
              <div class="ladi-gallery-control-item" data-index="9"></div>
              <div class="ladi-gallery-control-item" data-index="10"></div>
              <div class="ladi-gallery-control-item" data-index="11"></div>
              <div class="ladi-gallery-control-item" data-index="12"></div>
              <div class="ladi-gallery-control-item" data-index="13"></div>
              <div class="ladi-gallery-control-item" data-index="14"></div>
              <div class="ladi-gallery-control-item" data-index="15"></div>
              <div class="ladi-gallery-control-item" data-index="16"></div>
            </div>
            <div
              class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left opacity-0"
            ></div>
            <div
              class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right opacity-0"
            ></div>
          </div>
        </div>
      </div>
      <div id="IMAGE52" class="ladi-element">
        <div class="ladi-image">
          <div class="ladi-image-background"></div>
        </div>
      </div>
    </div> --}}
