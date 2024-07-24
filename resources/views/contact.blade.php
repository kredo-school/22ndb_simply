@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">         
            <div class="mt-4 text-center">
                <div class="row">
                    <p class="title">CONTACT US</p>
                </div>

                <div class="m-5">
                    <form method="POST" action="{{ route('contact.store') }}" id="contactForm" >
                        @csrf

                        <div class="row mb-4 align-items-center">
                            <div class="col-md-3 d-flex align-items-center">
                                <label for="firstname" class="form-label h4">{{ __('First name') }}</label>
                            </div>
                            <div class="col-md-3">
                                <div class="flex-grow-1">
                                    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3 d-flex align-items-center">
                                <label for="lastname" class="form-label h4">{{ __('Last name') }}</label>
                            </div>
                            <div class="col-md-3">
                                <div class="flex-grow-1">
                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4 align-items-center">
                            <div class="col-md-3 d-flex align-items-center ">
                                <label for="email" class="form-label h4">{{ __('Email') }}</label>
                            </div>
                            <div class="col-md-9">
                                <div class="flex-grow-1">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row mb-4 align-items-center">
                            <div class="col-md-3 d-flex align-items-center">
                                <label for="subject" class="form-label h4">{{ __('Subject') }}</label>
                            </div>
                            <div class="col-md-9">
                                <div class="flex-grow-1">
                                    <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject" autofocus>
                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-start">
                            <div class="col-md-3 d-flex align-items-center">
                                <label for="message" class="form-label h4 mb-0">{{ __('Message') }}</label>
                            </div>
                            <div class="col-md-9">
                                <div class="flex-grow-1">
                                    <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" required autocomplete="message" autofocus rows="6">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
            </div>
                
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto ">
                        <button type="button" class="btn btn-dark btn-lg w-100 button" data-bs-toggle="modal" data-bs-target="#contactConfirmationModal">
                            {{ __('Confirm') }}
                        </button>
                    </div>

                        <input type="hidden" id="hiddenFirstname" name="hiddenFirstname">
                        <input type="hidden" id="hiddenLastname" name="hiddenLastname">
                        <input type="hidden" id="hiddenEmail" name="hiddenEmail">
                        <input type="hidden" id="hiddenSubject" name="hiddenSubject">
                        <input type="hidden" id="hiddenMessage" name="hiddenMessage">
                    @include('modal.contact_confirm')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
document.addEventListener('DOMContentLoaded', (event) => {
    const confirmButton = document.querySelector('.btn[data-bs-toggle="modal"]');
    confirmButton.addEventListener('click', function() {
        // Populate hidden inputs with form data
        document.getElementById('hiddenFirstname').value = document.getElementById('firstname').value;
        document.getElementById('hiddenLastname').value = document.getElementById('lastname').value;
        document.getElementById('hiddenEmail').value = document.getElementById('email').value;
        document.getElementById('hiddenSubject').value = document.getElementById('subject').value;
        document.getElementById('hiddenMessage').value = document.getElementById('message').value;

        // Populate modal fields with the same data
        document.getElementById('confirmFirstname').textContent = document.getElementById('firstname').value;
        document.getElementById('confirmLastname').textContent = document.getElementById('lastname').value;
        document.getElementById('confirmEmail').textContent = document.getElementById('email').value;
        document.getElementById('confirmSubject').textContent = document.getElementById('subject').value;
        document.getElementById('confirmMessage').textContent = document.getElementById('message').value;
    });
});

function submitForm() {
    document.getElementById('contactForm').submit();
}
</script>