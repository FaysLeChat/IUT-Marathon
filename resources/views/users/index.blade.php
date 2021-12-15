@extends('layouts.app')

@section('content')
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>

    @guest
        Tu n'as pas l'autorisation d'accéder à cette page !
    @else
        <table>
            <tr>
                <td>
                    <img src="../{{ Auth::user()->avatar }}" height="50px" width="50px" /><br />
                    <b>{{ Auth::user()->name }}
                    @if(Auth::user()->administrateur === 1)
                            <br />ADMINISTRATEUR
                    @endif
                </td>
                <td>
                    Adresse mail : {{ Auth::user()->email }}<br />
                    Vérifié le : {{ Auth::user()->email_verified_at }}
                </td>
            </tr>
        </table>
    @endguest
@endsection
