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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="image">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links" style="margin-right: 5.5em;">
                @auth
                <div class="dropdown">
                    <button class="btn btn dropdown-toggle btn-lg" type="button" data-toggle="dropdown">Menu
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <h6 class="dropdown-header">Administration</h6>
                          <li><a href="/profile">Profil</a></li>
                          <li><a href="/gestion"></a>gestion</li>
                          <li><a class="" href="/article">Ajouter un article</a></li>
                          <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Deconnexion
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form></li>
                    </ul>
                </div>                @else
                <a href="{{ route('login') }}" data-hover="Narbonne">Connexion</a>
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