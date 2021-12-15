@extends('layouts.app')

@section('content')
    @guest()
        <b>Les derniers ajoutée:</b>
        <br>
        <table>
            <tr>

                @foreach($series->all() as $s)
                    <td><a href="series/{{$s -> id}}"> <img src="{{$s -> urlImage}}"></a></td>
                @endforeach
            </tr>
            <br>
            <tr>
                @foreach($series->all() as $s)
                    <td><a href="series/{{$s -> id}}">{{$s -> nom}}</a></td>
                @endforeach
            </tr>
        </table>
        <b>Les mieux notée :</b>
        <br>
        <table>
            <tr>

                @foreach($series2->all() as $c)
                    <td><a href="series/{{$c -> id}}"> <img src="{{$c -> urlImage}}"></a></td>
                @endforeach
            </tr>
            <br>
            <tr>
                @foreach($series2->all() as $c)
                    <td><a href="series/{{$c -> id}}">{{$c -> nom}}</a></td>
                @endforeach
            </tr>
        </table>
        <b>Par genre :</b>
        <br>
        <table>
            <tr>
                @foreach($series3->all() as $v)
                    <td><a href="series/{{$v -> id}}"> <img src="{{$v -> urlImage}}"></a></td>
                @endforeach
            </tr>
            <br>

            <tr>
                @foreach($series3->all() as $v)
                    <td><a href="series/{{$v -> id}}">{{$v -> nom}}</a></td>
                @endforeach
            </tr>
        </table>
    @else
        <b>Dernier episode regarder:</b>
        <br>
        <table>
            <tr>
                @foreach($series4->all() as $v)
                    <td><a href="series/{{$v -> id}}"> <img src="{{$v -> urlImage}}"></a></td>
                @endforeach
            </tr>
            <br>


            @foreach($series4->all() as $v)
                <td><a href="series/{{$v -> id}}">{{$v -> nom}}</a></td>
                @endforeach
                </tr>
        </table>
        <b>Les derniers ajoutée:</b>
        <br>
        <table>
            <tr>

                @foreach($series->all() as $s)
                    <td><a href="series/{{$s -> id}}"> <img src="{{$s -> urlImage}}"></a></td>
                @endforeach
            </tr>
            <br>
            @foreach($series->all() as $s)
                <td><a href="series/{{$s -> id}}">{{$s -> nom}}</a></td>
                @endforeach
                </tr>
        </table>
        <b>Les mieux notée :</b>
        <br>
        <table>
            <tr>

                @foreach($series2->all() as $c)
                    <td><a href="series/{{$c -> id}}"> <img src="{{$c -> urlImage}}"></a></td>
                @endforeach
            </tr>
            <br>
            <tr>
                @foreach($series2->all() as $c)
                    <td><a href="series/{{$c -> id}}">{{$c -> nom}}</a></td>
                @endforeach
            </tr>
        </table>
        <b>Par genre :</b>
        <br>
        <table>
            <tr>
                @foreach($series3->all() as $v)
                    <td><a href="series/{{$v -> id}}"> <img src="{{$v -> urlImage}}"></a></td>
                @endforeach
            </tr>
            <br>
            <tr>
                @foreach($series3->all() as $v)
                    <td><a href="series/{{$v -> id}}">{{$v -> nom}}</a></td>
                @endforeach
            </tr>
        </table>

        on doit y voir les dernières séries par exemple.
        ID Web
    @endguest
@endsection