<div class="ladi-section-background"></div>
<div class="ladi-container">
    <div id="GALLERY17" class="ladi-element">
        <div class="ladi-gallery ladi-gallery-bottom">
            <div class="ladi-gallery-view">
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left opacity-0"></div>
                <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right opacity-0"></div>

                @foreach ($sliderHeader as $sh)
                    <div class="ladi-gallery-view-item {{ $loop->first ? 'selected' : '' }}" data-index="{{ $loop->index }}" style="background-image: url({{ showImage($sh->image) }});"></div>
                @endforeach
                {{-- <div class="ladi-gallery-view-item selected" data-index="0"></div> --}}

            </div>
            <div class="ladi-gallery-control" style="display: none;">
                <div class="ladi-gallery-control-box">
                    {{-- <div class="ladi-gallery-control-item selected" data-index="0"></div> --}}
                    @foreach ($sliderHeader as $item)
                        <div class="ladi-gallery-control-item {{ $loop->first ? 'selected' : '' }}" data-index="{{ $loop->index }}"></div>
                    @endforeach
                </div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left opacity-0"></div>
                <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right opacity-0"></div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="ladi-section-background"></div>
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

                     <div class="ladi-gallery-view-item selected" data-index="{{ $loop->index }}"></div>
                 @endforeach

             </div>

             <div class="ladi-gallery-control">
                 <div class="ladi-gallery-control-box">
                     <div class="ladi-gallery-control-item selected" data-index="0"></div>
                     <div class="ladi-gallery-control-item" data-index="1"></div>
                     <div class="ladi-gallery-control-item" data-index="2"></div>
                     <div class="ladi-gallery-control-item" data-index="3"></div>
                     <div class="ladi-gallery-control-item" data-index="4"></div>
                     <div class="ladi-gallery-control-item" data-index="5"></div>
                 </div>
                 <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left opacity-0"></div>
                 <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right opacity-0"></div>
             </div>

         </div>
     </div>

 </div> --}}
