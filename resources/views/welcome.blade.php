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
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="image" style="background-image: url('{{$backImage}}')">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <div class="dropdown">
                    <button class="btn btn dropdown-toggle btn-lg" type="button" data-toggle="dropdown">Administration du site
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu" style="width: 15.8em;">
                          <h6 class="dropdown-header">Administration</h6>
                          <li><a href="/profile">Profil</a></li>
                          <li><a href="/gestion">Gestion</a></li>
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

                <div class="effet_couleur">
                    <span class="simplon_auch">SIMPLON AUCH</span>
                </div>

                <nav class="cl-effect-1">
                    <a href="/about" ><span>Simplon</span></a>
                    <a href="/promo" ><span>Promotion</span></a>
                    <a href="/blog" ><span>Blog</span></a>
                    <a href="/contact" ><span>Contact</span></a>
                    <a href="/liens" ><span>Liens</span></a>
                </nav>
            </div>
        </div>
    </body>
    </html>
