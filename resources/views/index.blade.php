@extends('layouts.app')

@section('content')
    @guest()
        <b>Les derniers ajoutée:</b>
        <br>
        <div class="allseries">

            @foreach($series->all() as $s)
                <li><a href="series/{{$s->id}}"> <img src="{{$s-> urlImage}}" /></a><br><p>{{ $s -> nom }}</p></li>
            @endforeach
        </div>
        <br>
        <b>Les mieux notée :</b>
        <br>
        <div class="allseries">

            @foreach($series2->all() as $c)
                <li><a href="series/{{$c->id}}"> <img src="{{$c-> urlImage}}" /></a><br><p>{{ $c -> nom }}</p></li>
            @endforeach
        </div>
        <br>
        <b>Par genre :</b>
        <br>
        <div class="allseries">
            @foreach($series3->all() as $v)
                <li><a href="series/{{$v->id}}"> <img src="{{$v-> urlImage}}" /></a><br><p>{{ $v -> nom }}</p></li>
            @endforeach
        </div>
        <br>
    @else
        < <b>Les derniers ajoutée:</b>
        <br>
        <div class="allseries">

            @foreach($series->all() as $s)
                <li><a href="series/{{$s->id}}"> <img src="{{$s-> urlImage}}" /></a><br><p>{{ $s -> nom }}</p></li>
            @endforeach
        </div>
        <br>
        <b>Les mieux notée :</b>
        <br>
        <div class="allseries">

            @foreach($series2->all() as $c)
                <li><a href="series/{{$c->id}}"> <img src="{{$c-> urlImage}}" /></a><br><p>{{ $c -> nom }}</p></li>
            @endforeach
        </div>
        <br>
        <b>Par genre :</b>
        <br>
        <div class="allseries">
            @foreach($series3->all() as $v)
                <li><a href="series/{{$v->id}}"> <img src="{{$v-> urlImage}}" /></a><br><p>{{ $v -> nom }}</p></li>
            @endforeach
        </div>
        <br>
    @endguest
@endsection
