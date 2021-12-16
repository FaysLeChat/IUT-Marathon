@extends('layouts.app')


@section('content')

    @guest()
        <div class="serie">
            <img src="../{{$serie-> urlImage}}" />
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




        <h3>Liste Episode </h3>
        <div class="listeEpisode">
            @foreach($episode->all() as $ep)
                <img src="../{{$ep->urlImage}}"/>
                <p>Saison {{$ep->saison}} <br>Episode {{$ep->numero}}<br>{{$ep->nom}}</p>
            @endforeach
        </div>
        <br>
        <br>
    @else
        <div class="serie">
            <img src="../{{$serie-> urlImage}}" />
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

        <h3>Liste Episode </h3>
        <div class="listeEpisode">

            @foreach($episode->all() as $ep)
                <img src="../{{$ep->urlImage}}"/>
                <p>Saison {{$ep->saison}} <br>Episode {{$ep->numero}}<br>{{$ep->nom}}</p>
            @endforeach
        </div>
        <br>
        <br>
        @auth
        <form method="post" action="/series/{{$serie->id}}/vue">
            {{csrf_field()}}
            <div>
                <label for="toto">Commentaire :</label>
                <br>
                <input id="toto" type="text" name="nom"  placeholder="Saisir le commentaire">
            </div>
            <div>
                <span>Note :</span>
                <br>
                <input id="actif_0" type="radio" name="note" value="0" >
                <label for="actif_0">0</label>
                <input id="actif_1" type="radio" name="note" value="1" >
                <label for="actif_1">1</label>
                <input id="actif_2" type="radio" name="note" value="2">
                <label for="actif_2">2</label>
                <input id="actif_3" type="radio" name="note" value="3" >
                <label for="actif_3">3</label>
                <input id="actif_4" type="radio" name="note" value="4">
                <label for="actif_4">4</label>
                <input id="actif_5" type="radio" name="note" value="5" >
                <label for="actif_5">5</label>
            </div>
            <br>
            <button type="reset">Annuler</button>
            <button type="submit">Valider</button>
        </form>
        <form method="post" action="/series/{{$serie->id}}/vue">
            @csrf
            <div>
                <button type="submit">Vus</button>
            </div>
        </form>
        @endauth
    @endguest

    <div>
            <a href="{{route('series.index')}}">Retour sur les Séries</a>
    </div>

@endsection
