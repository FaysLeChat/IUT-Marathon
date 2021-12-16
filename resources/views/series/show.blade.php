@extends('layouts.app')


@section('content')
<div class="serie_seule">

    @guest()
        <div class="serie">
            <img src="../{{$serie-> urlImage}}" />
            <div class="resume">
                <h1>{{$serie->nom}}</h1>
                <p>{{count($serie->episodes->unique('saison'))}} saisons - {{$serie->genre}} - {{$serie->langue}} - {{$serie->note}}/10</p>
                <h3>Resumé : </h3>
                <p>{!!  $serie->resume!!}</p>
                <h3>Première : </h3>{{$serie->premiere}}
                <h3>Statut : </h3>{{$serie->statut}}
            </div>
        </div>
        
        <p class="liste_episodes">Liste des épisodes </p>
        <div class="listeEpisode">
            @foreach($episode->all() as $ep)
            <div class="episode">
            <img src="../{{$ep->urlImage}}"/>
                <div class="infos_episode">
                    <p>Saison {{$ep->saison}} Episode {{$ep->numero}}</p>
                    <p>{{$ep->nom}}</p>
                </div>
            </div>
            @endforeach
        </div>



        <br>
        <h3>Avis :</h3>{{$serie->avis}}
        <br>
    @else
        <div class="serie">
            <img src="../{{$serie-> urlImage}}" />
            <div class="resume">
                <h1>{{$serie->nom}}</h1>
                <p>{{count($serie->episodes->unique('saison'))}} saisons - {{$serie->genre}} - {{$serie->langue}} - {{$serie->note}}/10</p>
                <h3>Resumé : </h3>
                <p>{!!  $serie->resume!!}</p>
                <h3>Première : </h3>{{$serie->premiere}}
                <h3>Statut : </h3>{{$serie->statut}}
            </div>
        </div>



        <p class="liste_episodes">Liste des épisodes </p>
        <div class="listeEpisode">
            @foreach($episode->all() as $ep)
            <div class="episode">
            <img src="../{{$ep->urlImage}}"/>
                <div class="infos_episode">
                    <p>Saison {{$ep->saison}} Episode {{$ep->numero}}</p>
                    <p>{{$ep->nom}}</p>
                </div>
            </div>
            @endforeach
        </div>



        <br>
        <h3>Avis :</h3>{{$serie->avis}}

        <br>
        @auth
        <form method="post" action="/series/{{$serie->id}}/vue">
            {{csrf_field()}}
            <div>
                <textarea name="commentaire" placeholder="Laisser un commentaire..."></textarea></p>
            </div>
            <div class="note">
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
            <div class="boutons">
            <button type="reset" class="button-34" role="button">Annuler</button>
            <button type="submit" class="button-34" role="button">Valider</button>
            </div>
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
    </div>

@endsection
