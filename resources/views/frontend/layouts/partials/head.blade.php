<meta charset="UTF-8" />
<title>{{ $config->title_seo ?? $config->name }}</title>
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Expires" content="-1" />
<meta name="keywords" content="" />
<meta name="description" content="Khám &#38; Điều Trị Da Liễu" />
<meta name="viewport" content="width=device-width, initial-scale=1" />


<link rel="icon" href="{{ showImage($config->icon) }}" type="image/png" />

<meta property="og:title" content="Khám &#38; Điều Trị Da Liễu" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Khám &#38; Điều Trị Da Liễu" />
<meta name="format-detection" content="telephone=no" />
<meta name="csrf-token" content="{{ csrf_token() }}" />


@include('frontend/layouts/partials/style')
