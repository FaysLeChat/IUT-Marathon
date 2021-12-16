@extends('layouts.app')

@section('content')
    @guest
        Tu n'as pas l'autorisation d'accéder à cette page !
    @else
        <img src="../{{ Auth::user()->avatar }}" height="50px" width="50px" />
        <b>{{ Auth::user()->name }}</b>
        <hr>
        <h2>Series récentes</h2>
        @foreach(\App\Http\Controllers\ControllerUsers::userSeries(Auth::user()->id) as $c)
            <a href="/series/{{ $c }}"><img src="/{{ \App\Models\Serie::find($c)->urlImage }}" /></a>
        @endforeach
        <hr>
        <h2>Préférences</h2>
        <form action="/profile/{{ Auth::user()->id }}" method="post">
            @csrf
            @method('PUT')
            <table>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type='text' name='name' value='{{ Auth::user()->name }}'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email<br />
                        Vérifiée le : {{ Auth::user()->email_verified_at }}
                    </td>
                    <td>
                        <input type='text' name='email' value='{{ Auth::user()->email }}'/>
                    </td>
                </tr>
                <tr>
                    <td>Avatar</td>
                    <td>
                        <input type='text' name='avatar' value='{{ Auth::user()->avatar }}'/>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <input type='submit' value ="Modifier" />
                    </td>
                </tr>
            </table>
        </form>
    @endguest
@endsection
