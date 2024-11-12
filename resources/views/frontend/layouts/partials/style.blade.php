<link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto:wght@400;700&display=swap"
    as="style" onload="this.onload = null; this.rel = 'stylesheet';" />

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto:wght@400;700&display=swap"
    rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />

<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}?v={{ filemtime(public_path('frontend/assets/css/main.css')) }}">


<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- Sweet Alerts css -->
<link href="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />


<style>
    .info-container {
        color: white;
        text-align: left;
        padding: 20px;
        font-family: Arial, sans-serif;
        max-width: 600px;
    }

    .logo-container {
        text-align: center;
        margin-bottom: 10px;
    }

    .logo {
        width: 100px;
    }

    .info-container h1 {
        font-size: 16px;
        text-align: center;
        font-weight: bold;
        margin-bottom: 20px;
        line-height: 22px;
    }

    .branch {
        margin-bottom: 20px;
        margin-left: 8px;
    }

    .branch ul li {
        margin-bottom: 5px;
    }

    .branch h2 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .contact-info {
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 20px;
    }

    .contact-info p {
        margin-bottom: 20px;
    }

    .icon {
        margin-right: 8px;
    }

    .footer-note {
        font-size: 12px;
        color: #a0a0a0;
        text-align: center;
        line-height: 18px;
    }

    @media screen and (max-width: 767px) {
        .swal2-popup.swal2-show {
            margin-top: 66px !important;
        }
    }

    /* Styles for the video container */
    .video-container {
        max-width: 100%;
        text-align: center;
    }

    .video-container iframe {
        width: 100%;
        height: 235px;
        border: none;
        margin-top: 69px;
    }

    /* Styles for the Swiper slider */
    .swiper-container {
        width: 100%;
        max-width: 600px;
    }

    .video-item {
        text-align: center;
        cursor: pointer;
    }

    .video-item img {
        width: 100px;
        height: 75px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .video-item span {
        display: block;
        font-size: 12px;
        margin-top: 5px;
        color: #333;
    }
</style>

@stack('styles')
