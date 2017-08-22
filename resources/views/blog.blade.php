
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Blog simplon Auch</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/tether.min.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="alternate" type="application/rss+xml"
   href="http://127.0.0.1:8000/flux" title="Blog"/>

    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="#">blog</a>
          <a class="nav-link" type="application/rss+xml"
             href="http://127.0.0.1:8000/flux">Flux RSS de cette page
          </a>
          <a class="nav-link " href="/">retour site</a>

        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Le Blog de Simplon </h1>
        <p class="lead blog-description">vraiment trop bien !!</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">




          @foreach ($articles as $article)
          <?php 
            $articleDate = date('d-m-Y  H:i:s', strtotime($article->created_at));
           ?>
          <div class="blog-post">
            <h2 class="blog-post-title">{{$article->titre}}</h2>
            <p class="blog-post-meta">le {{$articleDate}} de <a href='{{$article->cv}}'>{{$article->userName}}   </a><span>&#9733; </span>{{$article->note}}</p>

            {{$article->article}}

          </div>
          @endforeach



          
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>A propos</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="sidebar-module">
            <h4>Ailleur</h4>
            <ol class="list-unstyled">
              <li><a href="https://git">GitHub</a></li>

            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">

        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="/js/tether.min.js" type="text/javascript"></script>
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>

  </body>
</html>