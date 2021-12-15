@extends('layouts.app')
@section('content')
    <div class="allseries">
        @foreach($series as $s)
            <li><a  href="../series/{{$s->id}}"><img src="{{$s->urlImage}}"/></a>
                <div>
                    <p><h3>Nom:{{$s->nom}}</h3></p>
                    <p><h3>Genre:{{$s->genre}}</h3></p>
                    <p><h3>Langue:{{$s->langue}}</h3></p>
                    <p><h3>Nombre de saisons:{{$s->nbSaison()}}</h3></p>
                </div>

        </li>
        @endforeach
    </div>
@endsection
