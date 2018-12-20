@extends('layouts.master')
@section('content')
{!! Form::open(['url' => 'validation']) !!} 
<a> La fiche de frais a bien été validée</a>
<a href="{{ url('/validerFRAIS')}}" ><button type="button" class="btn btn-default btn-primary" >Retour</button></a>
{!! Form::close() !!}
@stop

