@extends('layouts.app')


@section('content')


    <div class="serie">
        <img src="../{{$serie-> urlImage}}"/>
        <div class="resume">
            <h1>{{$serie->nom}}</h1>
            <p>{{count($serie->episodes->unique('saison'))}} saisons - {{$serie->genre}} - {{$serie->langue}} - {{$serie->note}}/10</p>
            <h3>Resumé : </h3>
            <p>{!!  $serie->resume!!}</p>
        </div>

    </div>

    <h3>Première : </h3>{{$serie->premiere}}
    <h3>Avis :</h3>{{$serie->avis}}
    <h3>Statut : </h3>{{$serie->statut}}


    <div>
        <a href="{{route('series.index')}}">Retour sur les Séries</a>
    </div>

@endsection
