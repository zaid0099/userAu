@foreach ($conversation->replies as $reply)
<div>
    <p class="m-0"><strong> {{ $reply->user->name }} said..... </strong></p>

    {{ $reply->body }}
</div>

@can('update-conversation', $conversation)
<form method="POSR" action="/best-replies/{{ $reply->id }}">
    @csrf

    <button type="submit" class="btn p-0 text-muted">Beast Replay</button>
</form>
@endcan

@continue($loop->last)

<hr>
@endforeach

<h1>Replies Pages</h1>
