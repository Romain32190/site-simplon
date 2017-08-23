<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Simplon</title>

  <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/component.css" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="/bootstrap/dist/css/bootstrap.css" />
  <link rel="stylesheet" href="/css/simplon.css">
</head>
<body style="background-image: url('{{$backImage}}')">

  <nav>    
    <a href="/"><span>Accueil</span></a>
  </nav>

  <h2 class="text-center">PRESENTATION SIMPLON</h2>

  <div class="container">
    <div class="row">
      <div class="col">
        <h3>PHILOSOPHIE</h3>
        {{$philosophie}}
      </div>
      <div class="col">
        <h3>PROGRAMME</h3>
        {{$programme}}
      </div>
    </div>
  </div>

</body>
</html>