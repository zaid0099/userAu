@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul>
                @forelse($notifications as $notification)
                <li>
                    @if ($notification->type === 'App\Notifications\PaymentReceived')
                    we have recevied a payment of {{ $notification->data['amount'] }} from you.
                    @endif
                </li>
                @empty
                <li>You Have no Unread Notrifications at this Time.</li>

                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
