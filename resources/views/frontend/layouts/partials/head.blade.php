<meta charset="UTF-8" />
<title>{{ $config->title_seo ?? $config->name }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="{{ $config->keywords_seo }}" />
<meta name="description" content="{{ $config->description_seo }}" />

<link rel="icon" href="{{ showImage($config->icon) }}" type="image/png" />

<meta property="og:title" content="{{ $config->title_seo ?? $config->name }}" />
<meta property="og:type" content="website" />
<meta property="og:description" content="{{ $config->description_seo }}" />
<meta name="csrf-token" content="{{ csrf_token() }}" />




@include('frontend/layouts/partials/style')

{!! $config->custom_header !!}
