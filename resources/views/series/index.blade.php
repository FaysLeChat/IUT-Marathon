@extends('layouts.app')

@section('content')

    <div class="allseries">
        @foreach($serie->all() as $s)
            <li><a href="series/{{$s->id}}"> <img src="{{$s-> urlImage}}" /></a><br><p>{{ $s -> nom }}</p></li>

        @endforeach
    </div>

@endsection
