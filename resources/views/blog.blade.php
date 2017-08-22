<?php
try {
$bdd= new PDO('mysql:host=localhost;dbname=simplonSite;charset=utf8', 'root', 'azerty');

  }
  catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
  }
// Récupère les 10 derniers articles écrits
$blog= $bdd->query('SELECT titre, userName, article, blog.created_at FROM blog JOIN users ON blog.auteur=users.id ORDER BY blog.created_at DESC ');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="alternate" type="application/rss+xml"
   href="http://127.0.0.1:8000/flux" title="Blog"/>
  </head>
  <body class="image">

    <h1>Blog Simplon Auch</h1>
    <a type="application/rss+xml"
       href="http://127.0.0.1:8000/flux">Flux RSS de cette page
    </a>
  </body>
</html>
