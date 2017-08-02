<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Site Simplon
                </div>

                <div class="links">
                    <a href="/q=simplon">Simplon</a>
                    <a href="https://laracasts.com">Promotion</a>
                    <a href="https://laravel-news.com">Blog</a>
                    <a href="https://forge.laravel.com">Contact</a>
                    <a href="https://github.com/laravel/laravel">Liens</a>
                </div>
            </div>
        </div>
    </body>
</html>
