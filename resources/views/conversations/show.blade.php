@extends('layouts.app')

@section('content')
<p>
    <a href="/conversations">Back</a>
</p>

<h1>{{ $conversation->title }}</h1>

<p class="text-muted">Posted by {{ $conversation->user->name }}</p>

<div>
    {{ $conversation->body }}
</div>

<hr>
<div>
    @include('conversations.test001')
    @include('conversations.replies')
</div>
@endsection
