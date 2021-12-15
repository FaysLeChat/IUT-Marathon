@extends('layouts.app')
@section('content')
<div>
    <ul>
    @foreach($serie->all() as $s)
        <li>{{ $s -> nom }}</li>

        @endforeach
    </ul>

</div>






@endsection
