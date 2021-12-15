@extends('layouts.app')
@section('content')
    @foreach($series as $s)
        <li><a  href="../series/{{$s->id}}"><img src="{{$s->urlImage}}"/></a>
                <div>
                    <p>{{$s->nom}}</p>
                    <p>{{$s->genre}}</p>
                    <p>{{$s->langue}}</p>
                    <p>{{count($s->episodes->unique('saison'))}}</p>
                </div>

        </li>
    @endforeach









@endsection
