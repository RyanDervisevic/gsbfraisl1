@extends('layouts.master')
@section('content')
{!! Form::open(['url' => 'validerFRAIS']) !!}
<div class="col-md-12 col-sm-12 well well-md  well-sm">
    <center><h1>Valider les fiches de frais</h1></center>
    <table class="table table-bordered table-striped table-responsive">
    <thead>
        <tr>
            <th style="width:20%">Période</th> 
            <th style="width:20%">Nb justificatifs</th> 
            <th style="width:20%">Montant valide</th> 
            <th style="width:20%">Etat</th> 
            <th style="width:20%">Détails</th>  
        </tr>
    </thead>
            @foreach($mesFrais as $unFrais)
            <tr>   
                <td> {{ $unFrais->mois }} </td>   
                <td style="text-align:center;"><a href="{{ url('/voirDetailFrais') }}/{{ $unFrais->mois }}">
                        <span class="glyphicon glyphicon-eye-open" data-toggle="tooltip" data-placement="top" title="Voir"></span></a></td>
            </tr>
            @endforeach
        </table>
</div>