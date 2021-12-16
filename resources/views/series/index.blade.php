@extends('layouts.app')
@section('content')

    {{--<div class="recherche">
        <form method="POST" action="./series/{{$serie->id}}">
            Rechercher une série : <input type="text" name="recherche">
            <input id="submit" type="SUBMIT" value="Rechercher!">
        </form>
    </div>--}}
    <h3>trier Les séries</h3>
    <form method="post" action="/series/">
        @csrf
        <div>
            <a href="/tri/nom">Nom</a>
            <a href="/tri/genre">Genre</a>
            <a href="/tri/premiere">Date de sortie</a>
            <a href="/tri/note">Note</a>
        </div>
    </form>
    <div class="allseries">
        @foreach($series as $s)
        <div>
            <div class="hover">
            <a href="/series/{{$s->id}}"><img src="{{asset($s->urlImage)}}"/>
                <span class="serie-hover">
                <p>{{$s->genre}}</p>
                <p>{{$s->langue}}</p>
                <p>{{$s->nbSaison()}} saison(s)</p>
                <p class="ensavoir">En savoir +</p>
                </span>
            </div>
            <p class="nom_serie">{{$s->nom}}</p>
        </div>
        </a>
        @endforeach
    </div>
@endsection
