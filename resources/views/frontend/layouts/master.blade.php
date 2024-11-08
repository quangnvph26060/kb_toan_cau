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


        <div id="SECTION10" class="ladi-section">

            @include('frontend/breadcrumbs/section_10')

        </div>

        <div id="SECTION46" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="GALLERY16" class="ladi-element">
                    <div class="ladi-gallery ladi-gallery-bottom" >
                        <div class="ladi-gallery-view">
                            <div class="ladi-gallery-view-item selected" data-index="0"
                                style="background-image: url({{ showImage($banner->business) }}); height: 100% !important">
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
        </div>

        <div id="SECTION49" class="ladi-section">
            <div class="ladi-section-background"></div>
            <div class="ladi-container">
                <div id="GALLERY22" class="ladi-element" data-max-item="9" data-runtime-id="gWZiGqbNkV" data-current="7"
                    data-is-next="true" data-scrolled="true" data-loaded="true" data-next-time="1731048591030">
                    <div class="ladi-gallery ladi-gallery-bottom" >
                        <div class="ladi-gallery-view">
                            <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left" style="display: none"></div>
                            <div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right" style="display: none"></div>

                            @foreach ($sliderExpert as $sx)
                                <div class="ladi-gallery-view-item {{ $loop->first ? 'selected' : '' }}"
                                    data-index="{{ $loop->index }}"
                                    style="background-image: url({{ showImage($sx->image) }})"></div>
                            @endforeach
                        </div>
                        <div class="ladi-gallery-control">
                            <div class="ladi-gallery-control-box" style="left: -70px;">

                                @foreach ($sliderExpert as $item)
                                    <div class="ladi-gallery-control-item {{ $loop->first ? 'selected' : '' }}" data-index="{{ $loop->index }}" style="background-image: url({{ showImage($item->image) }}); width: 90px !important;"></div>
                                @endforeach

                            </div>
                            <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left"></div>
                            <div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right opacity-0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="SECTION19" class="ladi-section">

            @include('frontend/breadcrumbs/section_19')

        </div>


        <div id="SECTION47" class="ladi-section">

            @include('frontend/breadcrumbs/section_47')

        </div>


        <div id="SECTION32" class="ladi-section">

            @include('frontend/breadcrumbs/section_32')

        </div>

        <div id="SECTION38" class="ladi-section">

            @include('frontend/breadcrumbs/section_38')

        </div>


        <div id="SECTION31" class="ladi-section">

            @include('frontend/breadcrumbs/section_31')

        </div>


        <div id="SECTION5" class="ladi-section">
            <div class="ladi-container">
                <a href="{{ $config->link_fb }}" target="_blank" id="SHAPE2" class="ladi-element ladi-animation"
                    data-replace-href="{{ $config->link_fb }}">
                    <div class="ladi-shape"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                            preserveAspectRatio="none" viewBox="0 0 32 32" class="" fill="#000">
                            <image href="https://w.ladicdn.com/ladiui/icons/social/messenger.svg" height="32"
                                width="32"></image>
                        </svg></div>
                </a><a href="tel:{{ $config->hotline }}" id="SHAPE1" class="ladi-element ladi-animation">
                    <div class="ladi-shape"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                            preserveAspectRatio="none" viewBox="0 0 32 32" class="" fill="#000">
                            <image href="https://w.ladicdn.com/ladiui/icons/social/phone-call.svg" height="32"
                                width="32"></image>
                        </svg></div>
                </a><a href="https://zalo.me/{{ $config->hotline }}" target="_blank" id="BUTTON11" class="ladi-element"
                    data-replace-href="https://zalo.me/{{ $config->hotline }}">
                    <div class="ladi-button">
                        <div class="ladi-button-background"></div>
                        <div id="BUTTON_TEXT11" class="ladi-element ladi-button-headline">
                            <p class="ladi-headline"><span style="font-size: 16px;">NHẮN TIN ZALO<br></span><span
                                    style="font-size: 14px;">Bảo mật 100%</span></p>
                        </div>
                    </div>
                </a>
                <div data-action="true" id="BUTTON12" class="ladi-element">
                    <div class="ladi-button">
                        <div class="ladi-button-background"></div>
                        <div id="BUTTON_TEXT12" class="ladi-element ladi-button-headline">
                            <p class="ladi-headline"><span style="font-size: 16px;"> <a href="#contact2">
                                        NHẬN TƯ VẤN</span><br>Miễn phí
                                </a>
                            </p>
                        </div>
                    </div>
                </div><a href="tel:{{ $config->hotline }}" id="BUTTON13" class="ladi-element">
                    <div class="ladi-button">
                        <div class="ladi-button-background"></div>
                        <div id="BUTTON_TEXT13" class="ladi-element ladi-button-headline">
                            <p class="ladi-headline"><span style="font-size: 16px;">GỌI NGAY</span><br>Tư vấn 1:1 Bác
                                sĩ</p>
                        </div>
                    </div>
                </a><a href="https://zalo.me/{{ $config->hotline }}" target="_blank" id="SHAPE3"
                    class="ladi-element ladi-animation" data-replace-href="https://zalo.me/{{ $config->hotline }}">
                    <div class="ladi-shape"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                            preserveAspectRatio="none" viewBox="0 0 32 32" class="" fill="#000">
                            <image href="https://w.ladicdn.com/ladiui/icons/social/zalo.svg" height="32"
                                width="32"></image>
                        </svg></div>
                </a>
                <div id="BUTTON15" class="ladi-element">
                    <div class="ladi-button">
                        <div class="ladi-button-background"></div>
                        <div id="BUTTON_TEXT15" class="ladi-element ladi-button-headline">
                            <p class="ladi-headline">100% <span style="font-size: 18px;">BÁC SĨ DA
                                    LIỄU&nbsp;</span><span style="font-size: 18px;">TUYẾN TRUNG ƯƠNG<br>KHÁM &amp; ĐIỀU
                                    TRỊ</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="SECTION20" class="ladi-section">

            @include('frontend/breadcrumbs/section_20')

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
