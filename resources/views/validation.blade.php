@extends('layouts.master')
@section('content')
{!! Form::open(['url' => 'validation']) !!} 
<p> La fiche de frais a bien été validée</p>
<a href="{{ url('/validerFRAIS')}}" ><button type="button" class="btn btn-default btn-primary" >Retour</button></a>
{!! Form::close() !!}
@stop

