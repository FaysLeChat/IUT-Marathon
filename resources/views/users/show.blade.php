<style>
    table, th, td {
        border: 1px solid black;
    }
</style>

@if(!empty($user->id))
    <table>
        <tr>
            <td>
                <img src="../{{ $user->avatar }}" height="50px" width="50px" />
                <b>{{ $user->name }}</b>
            </td>
            <td style="width: 90%">
                Commentaires :<br /><br/>
                @foreach($comment as $c)
                    @if($c->user_id === $user->id)
                        {!! $c->note !!}, {!! $c->content !!}
                    @endif
                @endforeach
            </td>
        </tr>
    </table>
@else
    Pas d'utilisateur correspondant à cet id
@endif