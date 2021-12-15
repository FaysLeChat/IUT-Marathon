@extends('layouts.app')


@section('content')


    <div class="serie">
    <img src="../{{$serie-> urlImage}}" />
        <div class="resume">
            <h1>{{$serie->nom}}</h1>
            <p>{{$serie->nbSaison()}} saisons - {{$serie->genre}} - {{$serie->langue}} - {{$serie->note}}/10</p>
            <h3>Resumé : </h3>
            <p>{!!  $serie->resume!!}</p>
        </div>

    </div>

    <h3>Première : </h3>{{$serie->premiere}}
    <h3>Avis :</h3>{{$serie->avis}}
    <h3>Statut : </h3>{{$serie->statut}}
    <br>
    @auth
        <form method="post" action="/series/{{$serie->id}}/vue">
            @csrf
            <div>
                <button type="submit">Vus</button>
            </div>
        </form>
    @endauth
    <br>







    <div>
        <a href="{{route('series.index')}}">Retour sur les Séries</a>
    </div>

@endsection
