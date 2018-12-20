@extends('layouts.master')
@section('content')

<div class="col-md-12 col-sm-12 well well-md  well-sm">
    <center><h1>{{$titreVue or ''}}</h1></center>
    <div class="form-horizontal">  
        
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Action : </label>
            <div class="col-md-6 col-sm-3">
                <input type="text" name="id" value="{{$unFraisHorsForfait->id or ''}}" class="form-control" placeholder="Action réalisée" required autofocus>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Nom et prenom : </label>
            <div class="col-md-2 col-sm-2">
                <input type="text" name="prenom" value="{{$unFraisHorsForfait->prenom or ''}}"  class="form-control" placeholder="Prenom" required>
                <input type="text" name="nom" value="{{$unFraisHorsForfait->nom or ''}}"  class="form-control" placeholder="Nom" required>
            </div>
        </div>           
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Adresse : </label>
            <div class="col-md-2 col-sm-2">
                <input type="text" class="form-control"  name="adresse" value="{{$unFraisHorsForfait->adresse or 0}}" placeholder="Adresse" pattern="^\d*(\.\d{2})?" required>
                <input type="text" class="form-control"  name="cp" value="{{$unFraisHorsForfait->cp or 0}}" placeholder="CP" pattern="^\d*(\.\d{2})?" required>
                <input type="text" class="form-control"  name="ville" value="{{$unFraisHorsForfait->ville or 0}}" placeholder="Ville" pattern="^\d*(\.\d{2})?" required>
            </div>
        </div>    
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <button type="submit" class="btn btn-default btn-primary">
                    <span class="glyphicon glyphicon-ok"></span> Valider
                </button>
                
                <button type="button" class="btn btn-default btn-primary" 
                        onclick="javascript: window.location = '{{ url('/getListeFraisHorsForfait')}}/{{$mois}}';">
                    <span class="glyphicon glyphicon-remove"></span> Annuler</button>
            </div>           
        </div>






@if (session('erreur'))
        <div class="alert alert-danger">
         {{ session('erreur') }}
        </div>
    @endif
    </div>
</div>
{!! Form::close() !!}
@stop

