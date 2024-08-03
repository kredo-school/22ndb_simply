@extends('layouts.app')

@section('title', 'Direct Message')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/directMessage.css') }}">
@endsection

@section('content')
{{-- コンテナを大きさを固定すること --}}
<h6 class="ms-5 text-muted">Direct Message</h6>
<div class="container p-3">
    <div class="row align-items-start">
        {{-- name list --}}
        <div class="col-4">
            <div class="container">
                <div class="row flex-column">
                    <div class="col-12">
                        <ul class="list-group">
                            <li class="list-group-item d-flex align-items-center active">
                                <i class="fas fa-user-circle fa-2x me-3"></i>
                                <span>Masaya</span>
                                <span class="badge badge-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-user-circle fa-2x me-3"></i>
                                <span>Ami</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-user-circle fa-2x me-3"></i>
                                <span>Saya</span>
                            </li>
                            <li class="list-group-item d-flex align-items-center">
                                <i class="fas fa-user-circle fa-2x me-3"></i>
                                <span>Maiko</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- message --}}
        <div class="col-8">
            <div class="container border rounded p-3">
                {{-- @if (!$user) --}}
                    {{-- <div class="row justify-content-start">
                        <div class="col-6 px-1 mx-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <i class="fas fa-user-circle fa-2x me-3"></i>
                                        </div>
                                        <div class="col-10 text-start p-0">
                                            Hello. How are you?
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <p>Ami</p>
                                        </div>
                                        <div class="col-10 text-start">
                                            <p class="text-muted">14:05</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                {{-- @else --}}
                    <div class="row justify-content-end">
                        <div class="col-6 px-1 mx-2">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-10 text-end">
                                            Good! What's up?
                                        </div>
                                        <div class="col-2">
                                            <i class="fas fa-user-circle fa-2x me-3"></i>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-10 text-end">
                                            <p class="text-muted">14:10</p>
                                        </div>
                                        <div class="col-2">
                                            {{-- 文字数が多くなったときの対応 --}}
                                            <p class="text-center white-space-nowrap">Masaya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endif --}}
                    <div class="row justify-content-around mx-5">
                        <div class="input-group mt-3 align-items-center">
                            <i class="fas fa-image icon-sm me-2"></i>
                            <input type="text" class="form-control rounded" placeholder="Input your message">
                            <button type="#" class="btn btn-dark ms-2 rounded" type="button">Sent</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
