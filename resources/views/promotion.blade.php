<?php 
$user= DB::select('SELECT * FROM users');
   // dd($user);

?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Promotion AUCH</title>

    <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/component.css" />
    <script src="/CreativeLinkEffects/js/modernizr.custom.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/liens.css">
</head>
<body class="container image">

    <nav class="cl-effect-1">    
        <a href="/"><span>Accueil</span></a>
    </nav>

    <div class="places is-medium is-grey">
        <div>
            <div>    
                <div class="avatars">
                    @foreach ($user as $value)
                    <a href="{{$value->cv}}" id="place-{{$value->id}}" class="place-avatar" target="_blank">
                         <img src="storage/avatars/{{$value->avatar}}" style="width: 70px; height: 70px; border-radius: 110%;" alt={{$value->userName}}>
                        <div class="description box content">

                            <p> Mettre une descrition de chacun </p>
                            
                            <h4 class="nom">{{$value->userName}}</h4>

                        </div>
                    </a>            
                    @endforeach 
                </div>
            </div>
        </div>
    </div>

</body>
</html>
