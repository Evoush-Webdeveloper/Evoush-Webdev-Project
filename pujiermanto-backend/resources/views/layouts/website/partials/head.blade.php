<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />


<title>@yield('title')</title>

{{-- Meta tag seo --}}
<link rel="canonical" href="@yield('canonical')" />
<meta name="description" content="@yield('meta_desc')">
<meta name="keywords" content="@yield('meta_key')">
<meta name="author" content="@yield('meta_author')">
<meta property="og:url" content="@yield('og_url')">
<meta property="og:type" content="website" />
<meta property="og:site_name" content="@yield('og_site_name')" />
<meta property="og:title" content="@yield('og_title')">
<meta property="og:description" content="@yield('og_desc')">
<meta property="og:image" content="@yield('og_image')">
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="598" />

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('/assets/logo/logo_puji.png') }}">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@if($url == 'dashboard')
	{{-- dashboard --}}
	<!-- Bootstrap core CSS     -->
	<link href="{{ asset('/assets/dashboard/css/bootstrap.min.css') }}" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="{{ asset('/assets/dashboard/css/animate.min.css') }}" rel="stylesheet"/>

	<!--  Light Bootstrap Table core CSS    -->
	<link href="{{ asset('/assets/dashboard/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="{{ asset('/assets/dashboard/css/demo.css') }}" rel="stylesheet" />
	<link href="{{ asset('/assets/dashboard/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
@endif


{{-- Adsense --}}
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3504444534054185"
crossorigin="anonymous"></script>

<style type="text/css">
	.navbar-brand {

	}
</style>