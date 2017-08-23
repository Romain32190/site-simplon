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
  {{-- <link rel="stylesheet" type="text/css" href="/Semantic-UI-CSS/semantic.css" /> --}}
  <link rel="stylesheet" href="/css/liens.css">
</head>
<body class="image" style="background-image: url('{{$backImage}}')">

  <nav>    
    <a href="/"><span>Accueil</span></a>
  </nav>

  <div class="content">

    <div class="title"> 
      PRESENTATION SIMPLON
    </div>

    <div class="ui aligned grid">
      <div class="center aligned two column row">
        <div class="column">
          <h2>PHILOSOPHIE</h2>
          <div class="ui segment">
          {{$philosophie}}
          </div>
        </div>
        <div class="column">
          <h2>PROGRAMME</h2>
          <div class="ui segment">
          {{$programme}}
          </div>
        </div>
      </div>
    </div>

  </div>

</body>
</html>