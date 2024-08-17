@extends('layouts.app')

@section('title', 'Direct Message')

@section('css')
   <link rel="stylesheet" href="{{ asset('css/directMessage.css') }}">
@endsection

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-4">
            <h4 class="color-gray-1">Direct Message</h4>
        </div>
        <div class="col-8 d-flex align-items-end">
            @if (Auth::id() !== $recipient->id)
                <h5 class="color-gray-1 m-0">Recipient : {{ $recipient->username }}</h5>
            @endif
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row align-items-start justify-content-center">
        <!-- name list -->
        <div class="col-3 col-sm-4">
            <ul class="list-group">
                @foreach ($all_users as $user)
                    <li class="list-group-item {{ $recipient->id == $user->id ? 'active' : '' }}  py-3">
                        <a href="{{ route('directMessage.show', $user->id) }}" class="text-decoration-none d-flex align-items-center">
                            @if ($user->avatar)
                                <img src="{{ $user->avatar }}" class="avatar-sm rounded-circle">
                            @else
                                <i class="fa-solid fa-circle-user icon-sm"></i>
                            @endif
                            <span class="ms-3">{{ $user->username }}</span>

                            @if($user->unread_count > 0)
                                <span class="badge bg-danger ms-3">{{ $user->unread_count }}</span>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- message -->
        <div class="col-9 col-sm-8">
            <form action="{{ route('directMessage.store', $recipient->id) }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="container border rounded p-3 scrollable">
                    <div class="row">
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
                                        <div class="col-5 message-border">
                                            @if ($message->text)
                                                {{ $message->text }}
                                            @endif
                                            @if ($message->image)
                                                <img src="{{ asset($message->image) }}" alt="Image" class="img-fluid rounded">
                                            @endif
                                        </div>
                                        <div class="col-2 d-flex justify-content-center">
                                            @if ($sender->avatar)
                                                <img src="{{ $sender->avatar }}" class="avatar-sm rounded-circle">
                                            @else
                                                <i class="fa-solid fa-circle-user icon-sm"></i>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row justify-content-end align-items-center">
                                        <div class="col-10 mb-2">
                                            <p class="color-gray-2 text-end">{{ $message->created_at->format('H:i') }}</p>
                                        </div>
                                        <div class="col-2 d-flex justify-content-center mb-2">
                                            <p class="text-nowrap">{{ $sender->username }}</p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-12 my-2">
                                    <div class="row justify-content-start align-items-center">
                                        <div class="col-2 d-flex justify-content-center">
                                            @if ($recipient->avatar)
                                                <img src="{{ $recipient->avatar }}" class="avatar-sm rounded-circle">
                                            @else
                                                <i class="fa-solid fa-circle-user icon-sm"></i>
                                            @endif
                                        </div>
                                        <div class="col-5 message-border">
                                            @if ($message->text)
                                                {{ $message->text }}
                                            @endif
                                            @if ($message->image)
                                                <img src="{{ asset($message->image) }}" alt="Image" class="img-fluid rounded">
                                            @endif
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-2 d-flex justify-content-center">
                                            <p class="text-nowrap">{{ $recipient->username }}</p>
                                        </div>
                                        <div class="col-10">
                                            <p class="color-gray-2">{{ $message->created_at->format('H:i') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @php
                                $previousDate = $currentDate;
                            @endphp
                        @endforeach

                        <div class="input-group-container">
                            <div class="input-group d-flex justify-content-center align-items-center mx-auto">
                                <label for="image">
                                    <i class="fas fa-image icon-sm"></i>
                                </label>
                                <input type="file" id="image" name="image" class="image" accept="image/*">
                                <input type="text" name="text" class="form-control rounded mx-2" placeholder="Input your message">
                                <button type="submit" class="btn btn-dark rounded">Sent</button>
                            </div>
                            <p class="caution text-center text-danger mb-0">
                                Please input "Donation ID" for the first transaction!
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
