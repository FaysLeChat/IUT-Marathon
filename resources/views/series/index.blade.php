@extends('layouts.app')
@section('content')
    <h3>trier Les séries</h3>
    <form method="post" action="/series">
        @csrf
        <div>
            <button type="submit" name="nom">Nom</button>
            <button type="submit" name="genre">Genre</button>
            <button type="submit" name="dateN">Date de sortie</button>
            <button type="submit" name="note">Note</button>
        </div>
    </form>
    <div class="allseries">
        @foreach($series as $s)
        <div>
            <div class="hover">
            <a href="./series/{{$s->id}}"><img src="{{$s->urlImage}}"/>
                <span class="serie-hover">
                <p>{{$s->genre}}</p>
                <p>{{$s->langue}}</p>
                <p>{{$s->nbSaison()}} saison(s)</p>
                <p class="ensavoir">En savoir +</p>
                </span>
            </div>
            <p><h3>{{$s->nom}}</h3></p>
        </div>
        </a>
        @endforeach
    </div>
@endsection
