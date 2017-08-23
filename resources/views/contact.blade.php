
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>Page contact</title>
</head>
<body>
  <header>
    <div class="ui stackable massive menu">
      <a href="/" class="item"><img src="/images/simplonOcc.png" alt="logo" />
      <a class="item" href="/about">Simplon</a>
      <a class="item" href="/promo">Promotion</a>
      <a class="item" href="/blog">Blog</a>
      <a class="item" href="/contact">Contact</a>
      <a class="item" href="/liens">Liens</a>
    </div>
  </header>

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


<div class="ui container">

  @if (session('status'))
  <div class="ui success message">
    {{ session('status') }}
  </div>
  @endif

  <form action="/contact" method="post" class="ui form">
    {{ csrf_field() }}
    <div class="field" {!! $errors->has('name') ? 'has-error' : '' !!}>
      <label>Votre nom:</label>
      <input type="text" name="name" id="name" value="{{ old('name')}}">
      {!! $errors->first('name', '<div class="ui floating message">:message</div>') !!}
    </div>
    <div class="field">
      <label>Votre email:</label>
      <input type="text" name="email" id="name" value="{{ old('email')}}">
      {!! $errors->first('email', '<div class="ui floating message"> :message </div>') !!}
    </div>
    <div class="field">
      <label>Votre sujet:</label>
      <input type="text" name="subject" id="subject" value="{{ old('subject') }}">
      {!! $errors->first('subject', '<div class="ui floating message"> :message </div>') !!}
    </div>
    <div class="field">
      <label>Votre message:</label>
      <textarea name="message" id="message"> {{ old('message') }} </textarea>
      {!! $errors->first('message', '<div class="ui floating message"> :message </div>') !!}
    </div>
    <div class="field">
      {!! Recaptcha::render() !!}
      {!! $errors->first('g-recaptcha-response', '<div class="ui floating message"> :message </div>') !!}
    </div>
    <button id="contact-button" class="ui button green" type="submit">Submit</button>
  </form>
</div>


</body>
