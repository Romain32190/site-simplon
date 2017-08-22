@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">                
            <img src="/storage/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>Profil de {{ $user->userName }} </h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Mettre à jour votre avatar</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
            <br>
            <br>
            <form action="/profile/cv" method="POST">
                <label>Mettre à jour votre Cv : </label>
                <input type="url" name="cv" placeholder="http://....">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
            <br>
            <form action="/profile/email" method="POST">
                <label>Mettre à jour votre Adresse mail : </label>
                <input type="email" name="email">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
            <br>
            <form action="/profile/password" method="POST">
                <label>Changer de mot de passe : </label>
                <input type="password" name="password">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
