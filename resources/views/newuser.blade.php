@extends('layouts.master')
@section('content')

<div class="col-md-12 col-sm-12 well well-md  well-sm">
    <center><h1>{{$titreVue or ''}}</h1></center>
    <div class="form-horizontal">  
        
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">ID : </label>
            <div class="col-md-2 col-sm-2">
                <input type="text" name="id" value="{{$unFraisHorsForfait->id or ''}}" class="form-control" placeholder="Mettre un ID" patter="" required autofocus>
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
            <label class="col-md-3 col-sm-3 control-label">Info : </label>
            <div class="col-md-2 col-sm-2">
                <input type="text" class="form-control"  name="mail" value="{{$unFraisHorsForfait->mail or ''}}" placeholder="mail" pattern="[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})" required>
                <input type="text" class="form-control"  name="tel" value="{{$unFraisHorsForfait->tel or ''}}" placeholder="Telephone" pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}" required>
                <input type="text" class="form-control"  name="adresse" value="{{$unFraisHorsForfait->adresse or ''}}" placeholder="Adresse" pattern="" required>
                <input type="text" class="form-control"  name="cp" value="{{$unFraisHorsForfait->cp or ''}}" placeholder="CP" pattern="([A-Z]+[A-Z]?\-)?[0-9]{1,2} ?[0-9]{3}" required>
                <input type="text" class="form-control"  name="ville" value="{{$unFraisHorsForfait->ville or ''}}" placeholder="Ville" pattern="" required>
            </div>
        </div>    
        <div class="form-group">
            <label class="col-md-3 col-sm-3 control-label">Date embauche : </label>
            <div class="col-md-2 col-sm-2">
                <input type="date" name="dateembauche" value="{{$unFraisHorsForfait->dateEmbauche or ''}}" class="form-control" placeholder="Date Embauche" required autofocus>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <button type="submit" class="btn btn-default btn-primary">
                    <span class="glyphicon glyphicon-ok"></span> Valider
                </button>
                
                <button type="button" class="btn btn-default btn-primary" 
                        onclick="javascript: window.location = '{{ url('/NewVisiteur')}}';">
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

