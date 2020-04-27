<!DOCTYPE html>
<html lang="{{ app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" conetent="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token"content="{{ csrf_token()}}">
        <title>@yield('title')</title>
        <script src="{{ secure_asset('js/app.js') }}"defer></script>
        <link rel="dns-prefetch" href="http://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">
        <!--動かない時はsecure_assetをassetにする-->
    </head>
    
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <nav id="gnav">
                        <ul class="inner">
                            <li><a href="/">Home</a></li>
                            <li><a href="/information">Information</a></li>
                            <li><a href="/profile">Profile</a></li>
                            <li><a href="work">Works</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
            <main class="py-0">
             @yield('content')     
                
            </main>
        </div>
    </body>
</html>