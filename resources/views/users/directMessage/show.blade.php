@extends('layouts.app')

@section('title', 'Direct Message')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/directMessage.css') }}">
@endsection

@section('content')
{{-- コンテナを大きさを固定すること --}}
<h6 class="ms-5 text-muted">Direct Message</h6>
<div class="container p-3">
    <div class="row align-items-start justify-content-center">
        {{-- name list --}}
        <div class="col-4">
            <ul class="list-group border">
                @foreach ($all_users as $user)
                    <a href="{{ route('directMessage.show', $user->id) }}" class="text-decoration-none text-dark">
                        <li class="list-group-item d-flex align-items-center {{ $recipient->id == $user->id ? 'active' : '' }}">
                            @if ($user->avatar)
                                <img src="{{ $user->avatar }}" class="avatar-md">
                            @else
                                <i class="fa-solid fa-circle-user"></i>
                            @endif
                            <span class="ms-3">{{ $user->username }}</span>
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>

        {{-- message --}}
        <div class="col-8">
            <form action="{{ route('directMessage.store', $recipient->id) }}" method="post">
                @csrf

                <div class="container border rounded p-3 scrollable">
                    @if($messages->isEmpty())
                        <p class="text-center text-muted">Messages not yet</p>
                    @else
                        @foreach($messages as $message)
                            <div class="row {{ $message->user_id == Auth::id() ? 'justify-content-end' : 'justify-content-start' }}">
                                <div class="col-6 px-1 mx-2">
                                    <div class="card border-0 bg-white mt-3">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-2">
                                                    <i class="fas fa-user-circle fa-2x me-3"></i>
                                                </div>
                                                <div class="col-10">
                                                {{ $message->text }}
                                                </div>
                                            </div>

                                            <div class="row align-items-center">
                                                <div class="col-2">
                                                    @if ($message->user_id == $sender->id)
                                                        <p>{{ $sender->username }}</p>
                                                    @else
                                                        <p>{{ $recipient->username }}</p>
                                                    @endif
                                                </div>
                                                <div class="col-10">
                                                    <p class="text-muted">{{ $message->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    <div class="comment-input d-flex justify-content-around mx-5">
                        <div class="input-group mt-3 align-items-center">
                            <label for="file-upload" class="me-2 file-upload">
                                <i class="fas fa-image icon-sm"></i>
                            </label>
                            <input type="file" id="file-upload" name="image" style="display: none;">
                            <input type="text" name="text" class="form-control rounded" placeholder="Input your message">
                            <button type="submit" class="btn btn-dark ms-2 rounded" type="button">Sent</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
