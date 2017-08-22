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
            <form class="form-group" action="/profile/cv" method="POST">
                <label>Mettre à jour votre Cv : </label>
                <input class="form-control" type="url" name="cv" placeholder="http://...." size="20"  style="display:inline-block;height:40px;width:62em;">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary" style="margin-top:0.5em;" />
            </form>
            <br>
            <form class="form-group" action="/profile/email" method="POST">
                <label>Mettre à jour votre Adresse mail : </label>
                <input class="form-control" type="email" name="email" placeholder="Email" size="20"  style="display:inline-block;height:40px;width:62em;">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary" style="margin-top:0.5em;">
            </form>
            <br>
            <form class="form-group" action="/profile/password" method="POST">
                <label>Changer de mot de passe : </label>
                <input class="form-control" type="password" name="password" placeholder="Mot de passe" size="10" style="display:inline-block;height:40px;width:62em;">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary" style="margin-top:0.5em;">
            </form>

        </div>
    </div>
</div>
@endsection
