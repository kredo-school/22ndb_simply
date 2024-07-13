@extends('layouts.app')

@section('title', 'Direct Message')

@section('content')
<h6 class="ms-5 text-muted">Direct Message</h6>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-4">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <i class="fas fa-user-circle fa-2x"></i> Masaya
                    </div>
                    <span class="badge badge-pill">1</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <i class="fas fa-user-circle fa-2x"></i> Maiko
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <i class="fas fa-user-circle fa-2x"></i> Saya
                    </div>
                </li>
                <li class="list-group-item active d-flex justify-content-between align-items-center">
                    <div>
                        <i class="fas fa-user-circle fa-2x"></i> Ami
                    </div>
                </li>
            </ul>
        </div>

        <div class="col-8">
            <div class="chat-container">
                <div class="chat-message">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-user-circle fa-2x me-3"></i>
                        <div>
                            <div class="message">
                                Hello. How are you?
                            </div>
                            <strong>Ami</strong>
                            <div class="message-meta">14:05</div>
                        </div>
                    </div>
                </div>
                <div class="chat-message me text-end">
                    <div class="d-flex align-items-start justify-content-end">
                        <div>
                            <div class="message">
                                Good! What's up?
                            </div>
                            <div class="message-meta">14:10</div>
                        </div>
                        <i class="fas fa-user-circle fa-2x ms-3"></i>
                    </div>
                </div>
                <div class="chat-message">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-user-circle fa-2x me-3"></i>
                        <div>
                            <div class="message">
                                <strong>Ami</strong>
                                I would like to use your T-shirt.
                            </div>
                            <div class="message-meta">14:15</div>
                        </div>
                    </div>
                </div>
                <div class="chat-message me text-end">
                    <div class="d-flex align-items-start justify-content-end">
                        <div>
                            <div class="message">
                                Ok. Where in Okinawa do you live?
                            </div>
                            <div class="message-meta">14:20</div>
                        </div>
                        <i class="fas fa-user-circle fa-2x ms-3"></i>
                    </div>
                </div>
                <div class="input-group mt-3">
                    <span><i class="fas fa-image"></i></span>
                    <input type="text" class="form-control" placeholder="Input your message">
                    <button class="btn btn-dark ms-2" type="button">Submit</button>
                </div>
            </div>
        </div>

        {{-- <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="chat-message">
                        <div class="d-flex align-items-start mb-4">
                            <div class="row">
                                <div class="col-2">
                                    <i class="fas fa-user-circle mr-2"></i>
                                </div>
                                <div class="col-auto">
                                    <div class="ms-2">Hello. How are you?</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <div>Ami</div>
                                </div>
                                <div class="col-auto">
                                    <div class="text-muted small">14:05</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <i class="fas fa-user-circle mr-2"></i>
                            <div>
                                <div class="font-weight-bold">Ami</div>
                                <div>I would like to use your T-shirt.</div>
                                <div class="text-muted small">14:15</div>
                            </div>
                        </div>

                        <div class="d-flex align-items-start justify-content-end mb-4">
                            <div>
                                <div class="font-weight-bold">Me</div>
                                <div>Good! What's up?</div>
                                <div class="text-muted small">14:10</div>
                            </div>
                            <i class="fas fa-user-circle ml-2"></i>
                        </div>

                        <div class="d-flex align-items-start justify-content-end mb-4">
                            <div>
                                <div class="font-weight-bold">Me</div>
                                <div>Ok. Where in Okinawa do you live?</div>
                                <div class="text-muted small">14:20</div>
                            </div>
                            <i class="fas fa-user-circle ml-2"></i>
                        </div>
                    </div>

                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-image"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Input your message">
                        <div class="input-group-append">
                            <button class="btn btn-dark" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
