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
      <div class="image">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Accueil</a>
                    @else
                        <a href="{{ route('login') }}">Connexion</a>
                        <a href="{{ route('register') }}">Inscription</a>
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
<<<<<<< HEAD
                    <a href="/contact">Contact</a>
                    <a href="https://github.com/laravel/laravel">Liens</a>
=======
                    <a href="https://forge.laravel.com">Contact</a>
                    <a href="/liens">Liens</a>
>>>>>>> 9e9ff9b7d9062a1cf1cd577e8c924404f7c7772b
                </div>
            </div>
        </div>
      </div>
    </body>
</html>
