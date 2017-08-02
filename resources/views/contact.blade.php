<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Page contact</title>

  <body>
    @if (session('status'))
      <div class="ui success message">
          {{ session('status') }}
      </div>
    @endif

    <h1 class="contact">Contact</h1>

    <div class="ui blue card">
      <div class="content">
        <div class="header">Aurelien chirot</div>
          <div class="meta">
            <span class="category">Formateur</span>
          </div>
          <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="ui red card">
      <div class="content">
        <div class="header">Victor Godinho</div>
          <div class="meta">
            <span class="category">Administration</span>
          </div>
          <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="ui yellow card">
      <div class="content">
        <div class="header">Jordan Lefort</div>
          <div class="meta">
            <span class="category">Formateur</span>
          </div>
          <div class="description">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="ui container">
      <form action="/contact" method="post" class="ui form">
        {{ csrf_field() }}
        <div class="field">
          <label>Votre nom:</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="field">
          <label>Votre email:</label>
          <input type="text" name="email" id="name">
        </div>
        <div class="field">
          <label>Votre sujet:</label>
          <input type="text" name="subject" id="subject">
        </div>
        <div class="field">
          <label>Votre message:</label>
          <textarea name="message" id="message"></textarea>
        </div>
        <button id="contact-button" class="ui button green" type="submit">Submit</button>
      </form>
    </div>



  </body>
</html>
