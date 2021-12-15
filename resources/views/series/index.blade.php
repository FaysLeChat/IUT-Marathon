@extends('layouts.app')

@section('content')


@foreach($serie->all() as $s)
    <li>{{ $s -> nom }} <br><a href="series/{{$s->id}}"> <img src="{{$s-> urlImage}}" /></a></li>

@endforeach

@endsection