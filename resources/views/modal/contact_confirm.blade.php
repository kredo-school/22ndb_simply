<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<div class="modal fade" id="contactConfirmationModal" tabindex="-1" aria-labelledby="contactConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable custom-modal" role="document">
        <div class="modal-content px-5" >
            <div class="modal-body">
                <h5 class="modal-title mt-5 h1" id="contactConfirmationModalLabel">
                    <i class="fa-solid fa-circle-check"></i> Confirmation
                </h5>

                <div class="mt-4 col-md-12">
                    <div class="row">
                        <div class="col-3 text-start  px-0">
                            <p class="color-gray-1">First Name</p>
                        </div>
                        <div class="col-3 text-start px-0">
                            <p id="confirmFirstname">{{ old('hiddenFirstname') }}</p>
                        </div>
                        <div class="col-3 text-start px-0">
                            <p class="color-gray-1">Last Name</p>
                        </div>
                        <div class="col-3 text-start px-0">
                            <p id="confirmLastname">{{ old('hiddenLastname') }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-start px-0">
                            <p class="color-gray-1">Email</p>
                        </div>
                        <div class="col text-start px-0">
                            <p id="confirmEmail">{{ old('hiddenEmail') }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-start px-0">
                            <p class="color-gray-1">Subject</p>
                        </div>
                        <div class="col text-start px-0">
                            <p id="confirmSubject">{{ old('hiddenSubject') }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3 text-start px-0">
                            <p class="color-gray-1">Message</p>
                        </div>
                        <div class="col text-start px-0">
                            <p id="confirmMessage">{{ old('hiddenMessage') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <button type="button" class="btn btn-outline-dark button-modal btn-md w-100" data-bs-dismiss="modal">
                    Cancel
                    </button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-dark button-modal btn-md w-100">
                        Send
                    </button> 
                </div>
            </div>
        </div>
    </div>
</div>
