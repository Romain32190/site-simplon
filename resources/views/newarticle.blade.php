<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="/CreativeLinkEffects/css/component.css" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="/css/article.css">

  <title>Nouvel Article</title>
</head>
<body>

<div class="container">
 <nav class="cl-effect-1">
  <a href="/" style="color: black;"><span class="accueil">Revenir à l'accueil</span></a>
</nav>

<form action="/newarticle" method="post" class="form-group">
  {{ csrf_field() }}
  <div class="form-group">
    <label>Titre de l'article</label>
    <input type="text" name="titre" id="titre" class="form-control">

  </div>

  <div class="form-group">
    <label>Article:</label>
    <textarea name="article" id="article" class="form-control" rows="5"></textarea>

  </div>

  <button class="btn btn-success" type="submit">Ajoutez l'article au blog</button>
</form>
</div>

</body>
</html>
