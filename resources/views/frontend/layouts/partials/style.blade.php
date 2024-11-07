<link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto:wght@400;700&display=swap"
    as="style" onload="this.onload = null; this.rel = 'stylesheet';" />

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Roboto:wght@400;700&display=swap"
    rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />

<link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}" />

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
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .icon {
        margin-right: 8px;
    }

    .footer-note {
        font-size: 12px;
        color: #a0a0a0;
        text-align: center;
    }
</style>

@stack('styles')
