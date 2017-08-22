@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <h2>Gestion du site</h2>
        <div class="col-md-10 col-md-offset-1">                
          <form enctype="multipart/form-data" action="/gestion/img" method="POST">
                <label>Modification de l'image : </label>
                <input type="file" name="img" id="img">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
            <br>
             <form action="/gestion/philo" method="POST">
             <div>
                <label id="philo">Changer la philosophie de simplon : </label>
             </div>
             <div>
                 <textarea name="philo" id="philo" cols="140" rows="10"></textarea>
             </div>
             <div>
                 
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
             </div>
            </form>
             <br>
             <form action="/gestion/prog" method="POST">
             <div>
                <label id="prog">Changer le programme simplon : </label>
             </div>
             <div>
                 <textarea name="prog" id="prog" cols="140" rows="10"></textarea>
             </div>
             <div>
                 
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
             </div>
            </form>
        </div>
    </div>
</div>
@endsection
