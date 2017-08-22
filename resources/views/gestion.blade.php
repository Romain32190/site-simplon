@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <h2 style="text-align:center;">Gestion du site</h2>
        <div class="col-md-10 col-md-offset-1">
          <form enctype="multipart/form-data" action="/gestion/img" method="POST">
                <label>Modification de l'image : </label>
                <input type="file" name="img" id="img">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
            <br>
             <form class="form-group" action="/gestion/philo" method="POST">
             <div>
                <label id="philo">Changer la philosophie de simplon : </label>
             </div>
             <div>
                 <textarea class="form-control" name="philo" id="philo" cols="140" rows="10"  style="width:60em; height:15em; float:left; margin-right:25px;"></textarea>
             </div>
             <div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary" style="margin-top: 7em;">
             </div>
            </form>
             <br>
             <form class="form-group" action="/gestion/prog" method="POST">
             <div>
                <label id="prog">Changer le programme simplon :</label>
             </div>
             <div>
                 <textarea class="form-control" name="prog" id="prog" cols="140" rows="10" style="width:60em; height:15em; float:left; margin-right:25px;"></textarea>
             </div>
             <div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary" style="margin-top: 7em;">
             </div>
            </form>
        </div>
    </div>
</div>
@endsection
