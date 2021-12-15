@extends('layouts.app')
@section('content')
    <div class="allseries">
        @foreach($series as $s)
        <div>
            <div class="hover">
            <a href="./series/{{$s->id}}"><img src="{{$s->urlImage}}"/>
                <span class="serie-hover">
                <p>{{$s->genre}}</p>
                <p>{{$s->langue}}</p>
                <p>{{count($s->episodes->unique('saison'))}} saison(s)</p>
                <p class="ensavoir">En savoir +</p>
                </span>
            </div>
            <p><h3>{{$s->nom}}</h3></p>
        </div>
        </a>
        @endforeach
    </div>
@endsection
