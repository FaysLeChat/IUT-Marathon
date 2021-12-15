@extends('layouts.app')

@section('content')
    C'est la page générale du site,
    <br />
    on doit y voir les dernières séries par exemple.

    @foreach($serie->all() as $s)
        <li>{{ $s -> nom }} <br><a href="series/{{$s->id}}"> <img src="{{$s-> urlImage}}" /></a></li>

    @endforeach

@endsection