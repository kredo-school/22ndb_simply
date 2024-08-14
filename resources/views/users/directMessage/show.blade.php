@extends('layouts.app')

@section('title', 'Direct Message')

@section('css')
   <link rel="stylesheet" href="{{ asset('css/directMessage.css') }}">
@endsection

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-4">
            <h4 class="grey-text">Direct Message</h4>
        </div>
        <div class="col-8">
            <h4 class="grey-text">{{ $recipient->username }}</h4>
        </div>
    </div>
</div>

<div class="container p-3">
    <div class="row align-items-start justify-content-center">
        {{-- name list --}}
        <div class="col-4">
            <ul class="list-group border">
                @foreach ($all_users as $user)
                    <a href="{{ route('directMessage.show', $user->id) }}" class="text-decoration-none">
                        <li class="list-group-item d-flex align-items-center {{ $recipient->id == $user->id ? 'active' : '' }} custom-active-class">
                            @if ($user->avatar)
                                <img src="{{ $user->avatar }}" class="avatar-sm rounded-circle">
                            @else
                                <i class="fa-solid fa-circle-user"></i>
                            @endif
                            <span class="ms-3 fs-6">{{ $user->username }}</span>

                            @if($user->unread_count > 0)
                                <span class="badge bg-danger ms-3">{{ $user->unread_count }}</span>
                            @endif
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>

       {{-- message --}}
        <div class="col-8">
            <form action="{{ route('directMessage.store', $recipient->id) }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="container border rounded p-3 scrollable">
                    <div class="row">
                        @if($messages->isEmpty())
                            <p class="text-center text-danger h4">Please input "Donation ID"  for the owner first!</p>
                        @else
                            @php
                                $previousDate = null;
                            @endphp

                            @foreach($messages as $message)
                                @php
                                    $currentDate = $message->created_at->format('Y-m-d');
                                @endphp

                                @if ($previousDate !== $currentDate)
                                    <div class="text-center my-3">
                                        <span class="badge bg-grey px-3">{{ $currentDate }}</span>
                                    </div>
                                @endif

                                @if ($message->user_id == Auth::id())
                                    <div class="col-12 my-2">
                                        <div class="row justify-content-end align-items-center">
                                            <div class="col-auto">
                                            </div>
                                            <div class="col-5 message-border me-4">
                                                {{ $message->text }}
                                            </div>
                                            <div class="col-2 d-flex justify-content-center">
                                                <i class="fas fa-user-circle fa-2x"></i>
                                            </div>
                                        </div>

                                        <div class="row justify-content-end align-items-center">
                                            <div class="col-10 mb-2">
                                                <p class="text-grey text-end me-4">{{ $message->created_at->format('H:i') }}</p>
                                            </div>
                                            <div class="col-2 d-flex justify-content-center mb-2">
                                                <p class="fs-7 text-nowrap">{{ $sender->username }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-12 my-2">
                                        <div class="row justify-content-start align-items-center">
                                            <div class="col-2 d-flex justify-content-center">
                                                <i class="fas fa-user-circle fa-2x"></i>
                                            </div>
                                            <div class="col-5 message-border">
                                                {{ $message->text }}
                                            </div>
                                            <div class="col-auto">
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-2 d-flex justify-content-center">
                                                <p class="text-nowrap">{{ $recipient->username }}</p>
                                            </div>
                                            <div class="col-10">
                                                <p class="text-grey">{{ $message->created_at->format('H:i') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @php
                                    $previousDate = $currentDate;
                                @endphp
                            @endforeach
                        @endif

                        <div class="input-group justify-content-center align-items-center">
                            <label for="image">
                                <i class="fas fa-image icon-sm" style="cursor: pointer;"></i>
                            </label>
                            <input type="file" id="image" name="image" accept="image/*" style="display: none;">
                            <input type="text" name="text" class="form-control rounded mx-2" placeholder="Input your message">
                            <button type="submit" class="btn btn-dark rounded">Sent</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
