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
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="image">
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

                <span class="simplon_auch"> SIMPLON AUCH </span>

                <nav class="cl-effect-1">
                    <a href="/q=simplon" data-hover="Narbonne"><span>Simplon</span></a>
                    <a href="/promo" data-hover="Saint-Gaudens"><span>Promotion</span></a>
                    <a href="/blog" data-hover="Montreuil"><span>Blog</span></a>
                    <a href="/contact" data-hover="Montreuil"><span>Contact</span></a>
                    <a href="/liens" data-hover="Montreuil"><span>Liens</span></a>                                       
                </nav>
            </div>
        </div>
</body>
</html>