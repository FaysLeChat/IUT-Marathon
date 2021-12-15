<div>
    <h1>{{$serie->nom}}</h1>
    <img src="../{{$serie-> urlImage}}"/>
    <h3>Resumé : </h3>{!!  $serie->resume!!}
    <h3>Langue :</h3>{{$serie->langue}}
    <h3>Statut : </h3>{{$serie->statut}}
    <h3>Genre : </h3>{{$serie->genre}}
    <h3>Première : </h3>{{$serie->premiere}}
    <h3>Note : </h3>{{$serie->note}}
    <h3>Avis :</h3>{{$serie->avis}}

</div>

<div>
    <a href="{{route('series.index')}}">Retour sur les Séries</a>
</div>