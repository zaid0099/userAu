@extends('layouts.app')


@section('content')

    @foreach ($conversations as $conversation)
        <h2><a href="/conversations/{{ $conversation->id }}"> {{ $conversation->title }} </a></h2>
    @endforeach
@endsection
