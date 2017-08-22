<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css">
  <title>Nouvel Article</title>
</head>
<body>

 <form action="/newarticle" method="post" class="ui form">
  {{ csrf_field() }}
  <div class="field">
    <label>Titre:</label>
    <input type="text" name="titre" id="titre" >
    
  </div>

  <div class="field">
    <label>Article:</label>
    <textarea name="article" id="article"></textarea>
    
  </div>

  <button class="ui button green" type="submit">Enregistrer</button>
</form>


</body>
</html>