<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('layouts.website.partials.head')

</head>
<body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    {{-- Check Condition For Product page --}}


    @if($url !== "dashboard")
        @include('layouts.website.partials.navigation')
    @endif

    <main class="py-4">
        @yield('content')
    </main>

    @include('layouts.website.partials.script')

</body>
</html>
