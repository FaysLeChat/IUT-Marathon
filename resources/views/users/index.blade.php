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

                    <form action="/profile/{{ Auth::user()->id }}" method="post">
                        @csrf
                        @method('PUT')
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type='text' name='name' value='{{ Auth::user()->name }}'/> </td>
                            </tr>
                            <tr>
                                <td>Email</td>
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
                </td>
            </tr>
        </table>
    @endguest
@endsection
