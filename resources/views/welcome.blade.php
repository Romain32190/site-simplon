<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Acceuil </title>
    <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/component.css" />
    <script src="/CreativeLinkEffects/js/modernizr.custom.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/csshake.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="image">
        <div class="flex-center position-ref full-height cl-effect-1">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Accueil</a>
                @else
                <a href="{{ route('login') }}" data-hover="Narbonne" target="_blank">Connexion</a>
                <a href="{{ route('register') }}" data-hover="Saint-Gaudens" target="_blank">Inscription</a>
                @endauth
            </div>
            @endif

            <div class="content">


                <span class="simplon_auch"> SIMPLON AUCH </span>


                <nav class="cl-effect-1">
                    <a href="/q=simplon" data-hover="Narbonne" target="_blank">Simplon</a>
                    <a href="/promo" data-hover="Saint-Gaudens" target="_blank">Promotion</a>
                    <a href="/blog" data-hover="Montreuil" target="_blank">Blog</a>
                    <a href="/contact" data-hover="Montreuil" target="_blank">Contact</a>
                    <a href="/liens" data-hover="Montreuil" target="_blank">Liens</a>                                       
                </nav>
            </div>
        </div>
    </div>
</body>
</html>