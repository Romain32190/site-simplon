@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Accueil</div>

                <div class="panel-body">
                <ul>
                    <li>
                <a href="/profile">Profil</a>       
                    </li>
                    <li>
                <a href="/gestion/blog">Blog</a>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection