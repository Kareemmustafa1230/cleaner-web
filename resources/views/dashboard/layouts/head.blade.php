<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="لوحة تحكم {{ $settings->name }} - إدارة خدمات النظافة والعقارات">
<meta name="keywords" content="نظافة, عقارات, صيانة, إدارة">
<meta name="author" content="{{ $settings->name }}">
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<meta property="og:title" content="@yield('title', 'لوحة التحكم')">
<meta property="og:description" content="لوحة تحكم {{ $settings->name }}">
<meta property="og:type" content="website">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">



