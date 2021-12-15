@extends('layouts.app')

@section('content')
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>

    @if(!empty($user->id))
        <img src="../{{ $user->avatar }}" height="50px" width="50px" />
        <b>{{ $user->name }}</b>
        <hr>
        <h2>Séries récentes</h2>
        <hr>
        <h2>Commentaires</h2>
        <table>
            @foreach($comment as $c)
                @if($c->user_id === $user->id)
                <tr>
                    <td>
                        {!! $c->note !!} étoiles
                    </td>
                    <td style="width: 90%">
                        {!! $c->content !!}
                    </td>
                </tr>
                @endif
            @endforeach
        </table>
    @else
        Pas d'utilisateur correspondant à cet id
    @endif
@endsection