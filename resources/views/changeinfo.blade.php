@extends('layouts.master')
@section('content')
<div class="col-md-12 well well-md">
    <center><h1>Changer d'informations</h1></center>
    <form method="POST" action="">
        <div class="row">
        <div class="form-group">
            <label class="col-md-3 control-label">Adresse : </label>
            <div class="col-md-6">
                <input type="text" name="adr" class="form-control" placeholder="Votre nouvelle adresse" required autofocus>
            </div>
        </div>
        </div>
         <div class="row">
        <div class="form-group">
            <label class="col-md-3 control-label">N°Telephone : </label>
            <div class="col-md-6">
                <input type="text" name="ntel" class="form-control" placeholder="Votre nouveau  numéro" >
            </div>
        </div>
         </div>
         <div class="row">
        <div class="form-group">
            <label class="col-md-3 control-label">E-Mail : </label>
            <div class="col-md-6">
                <input type="text" name="email" class="form-control" placeholder="Votre nouveau e-mail" >
            </div>
        </div>
         </div>
        </br>
        <div class="form-group">    
            
            <center><button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Valider</button></center>
        </div>
        <div class="form-group">
            <center><button type="reset" class="btn btn-default"> Reset</button></center>
        </div>
    </form>
     @if (session('erreur'))
        <div class="alert alert-danger">
         {{ session('erreur') }}
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success">
         {{ session('status') }}
        </div>
    @endif

</div>
{!! Form::close() !!}
@stop

