<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="لوحة تحكم {{ $settings->name }} - إدارة خدمات النظافة والعقارات">
<meta name="keywords" content="نظافة, عقارات, صيانة, إدارة">
<meta name="author" content="{{ $settings->name }}">
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<meta property="og:title" content="@yield('title', 'لوحة التحكم')">
<meta property="og:description" content="لوحة تحكم {{ $settings->name }}">
<meta property="og:type" content="website">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="theme-color" content="#2563eb">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="{{ $settings->name }}">

<!-- Preload critical resources -->
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" as="style">
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style">
<link rel="preload" href="{{ asset('assets/dashboard.css') }}" as="style">
<link rel="preload" href="{{ asset('assets/dashboard-rtl.css') }}" as="style">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-AoS2qKQq3OON3Q0Xk9RRNyS5AxM5oPzEjorD4V3q2mlJ6uvZMi1IXQ4eMQytEJR2XexH5vC4myY3o9X-Yitmkg==" crossorigin="anonymous" referrerpolicy="no-referrer">

<!-- GLightbox for image/video lightbox -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">

<!-- Custom CSS -->
@if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('assets/dashboard-rtl.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('assets/dashboard.css') }}">
@endif

<!-- Structured Data -->


<!-- Performance optimization -->
<link rel="dns-prefetch" href="//fonts.googleapis.com">
<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
<link rel="dns-prefetch" href="//cdn.jsdelivr.net">



