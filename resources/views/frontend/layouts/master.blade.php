<!DOCTYPE html>
<html lang="vi">

<head>

    @include('frontend/layouts/partials/head')

</head>

<body class="lazyload">

    <div class="ladi-wraper">

        <div id="SECTION9" class="ladi-section">

            @include('frontend/breadcrumbs/section_9')

        </div>

        <div id="SECTION54" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="IMAGE60" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"
                            style="background-image: url({{ showImage($config->banner) }})"></div>
                    </div>
                </div>
            </div>
        </div>



        <div id="SECTION49" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="GALLERY22" class="ladi-element" data-max-item="9" data-runtime-id="gWZiGqbNkV" data-current="7"
                    data-is-next="true" data-scrolled="true" data-loaded="true" data-next-time="1731048591030">
                    <div class="ladi-gallery ladi-gallery-bottom">
                        <div class="ladi-gallery-view" style="margin-top: 53px !important;">
                            <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left" style="display: none">
                            </div>
                            <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right" style="display: none">
                            </div>

                            @foreach ($sliderV1 as $sx)
                                <div class="ladi-gallery-view-item {{ $loop->first ? 'selected' : '' }}"
                                    data-index="{{ $loop->index }}"
                                    style="background-image: url({{ showImage($sx->image) }})"></div>
                            @endforeach
                        </div>
                        <div class="ladi-gallery-control">
                            <div class="ladi-gallery-control-box" style="left: -70px;">

                                @foreach ($sliderV1 as $item)
                                    <div class="ladi-gallery-control-item {{ $loop->first ? 'selected' : '' }}"
                                        data-index="{{ $loop->index }}"
                                        style="background-image: url({{ showImage($item->image) }}); width: 90px !important;">
                                    </div>
                                @endforeach

                            </div>
                            <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left"></div>
                            <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right opacity-0"></div>
                        </div>
                    </div>
                </div>

                <div id="BUTTON50" class="ladi-element">
                    <div class="ladi-button">
                        <div class="ladi-button-background"></div>
                        <div id="BUTTON_TEXT50" class="ladi-element ladi-button-headline">
                            <p class="ladi-headline">ĐỘI NGŨ CHUYÊN GIA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="SECTION54" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="IMAGE60" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"
                            style="background-image: url({{ asset('frontend/assets/images/17314616756734022b92c92.jpg') }})">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="SECTION32" class="ladi-section">

            @include('frontend/breadcrumbs/section_32', ['link' => $config->link_video_main])

        </div>




        <div id="SECTION46" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="GALLERY16" class="ladi-element">
                    <div class="ladi-gallery ladi-gallery-bottom">
                        <div class="ladi-gallery-view">
                            <div class="ladi-gallery-view-item selected" data-index="0"
                                style="background-image: url({{ showImage($banner->business) }}); height: 100% !important">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="BUTTON50" class="ladi-element">
                <div class="ladi-button">
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT50" class="ladi-element ladi-button-headline">
                        <p class="ladi-headline">ĐƯỢC SỞ Y TẾ CẤP PHÉP HOẠT ĐỘNG</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- style="height: 237px !important" --}}
        <div id="SECTION47" class="ladi-section">

            @include('frontend/breadcrumbs/section_47')

        </div>


        <div id="SECTION48" class="ladi-section">
            @include('frontend/breadcrumbs/section_48')
        </div>

        <div id="SECTION10" class="ladi-section">

            @include('frontend/breadcrumbs/section_10')

        </div>

        <div id="SECTION5" class="ladi-section">
            @include('frontend/breadcrumbs/section_5')
        </div>


        <div id="SECTION19" class="ladi-section">

            @include('frontend/breadcrumbs/section_19')

        </div>


        <div id="SECTION32" class="ladi-section">

            @include('frontend/breadcrumbs/section_32', ['link' => $config->link_video_v1])

        </div>

        <div id="SECTION32" class="ladi-section" style="padding-top: 6px !important; height: 246.226px;">

            @include('frontend/breadcrumbs/section_32', ['link' => $config->link_video_v2])

        </div>

        <div id="SECTION38" class="ladi-section">

            @include('frontend/breadcrumbs/section_38')

        </div>



        <div id="SECTION54" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="IMAGE60" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"
                            style="background-image: url({{ asset('frontend/assets/images/17314616756734022b92c92.jpg') }})">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="SECTION46" class="ladi-section" style="height: 295px !important">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="GALLERY16" class="ladi-element">
                    <div class="ladi-gallery ladi-gallery-bottom">
                        <div class="ladi-gallery-view">
                            {{-- <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/4cr3O7shTx0?si=sxMYdPE_g-IUtzj-"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div id="BUTTON50" style="height: 63.0004px !important;" class="ladi-element">
                <div class="ladi-button">
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT50" class="ladi-element ladi-button-headline">
                        <p class="ladi-headline" style="padding-top: 6px;">MIỄN PHÍ THẢI ĐỘC BẰNG <br> PHƯƠNG PHÁP GUASHA</p>
                    </div>
                </div>
            </div>
        </div>


        <div id="SECTION31" class="ladi-section">

            @include('frontend/breadcrumbs/section_31')

        </div>

        <div id="SECTION20" class="ladi-section">

            @include('frontend/breadcrumbs/section_20')

        </div>

        <div id="SECTION32" class="ladi-section" style="height: 243.226px !important;">

            @include('frontend/breadcrumbs/section_32', ['link' => $config->link_video_v3])

        </div>

        <div id="SECTION54" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="IMAGE60" class="ladi-element">
                    <div class="ladi-image">
                        <div class="ladi-image-background"
                            style="background-image: url({{ asset('frontend/assets/images/17314616756734022b92c92.jpg') }})">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="SECTION6" class="ladi-section">

            @include('frontend/breadcrumbs/section_6')

        </div>




        <div id="SECTION55" class="ladi-section">

            @include('frontend/breadcrumbs/section_55')

        </div>


        <div id="SECTION_POPUP" class="ladi-section">

            @include('frontend/breadcrumbs/section_popup')

        </div>

    </div>

    <div id="backdrop-popup" class="backdrop-popup"></div>
    <div id="backdrop-dropbox" class="backdrop-dropbox"></div>
    <div id="lightbox-screen" class="lightbox-screen"></div>

    @include('frontend/layouts/partials/script')
</body>

</html>
