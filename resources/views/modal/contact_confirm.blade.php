<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<div class="modal fade" id="contactConfirmationModal" tabindex="-1" aria-labelledby="contactConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable custom-modal" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title mt-5 h1" id="contactConfirmationModalLabel">
                    <i class="fa-solid fa-circle-check"></i> Confirmation
                </h5>

                <div class="mt-4 col-md-10">
                    <div class="row">
                        <div class="col text-end me-3">
                            <p class="color-gray-1">First Name</p>
                        </div>
                        <div class="col text-start">
                            <p id="confirmFirstname">{{ old('hiddenFirstname') }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-end me-3">
                            <p class="color-gray-1">Last Name</p>
                        </div>
                        <div class="col text-start">
                            <p id="confirmLastname">{{ old('hiddenLastname') }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-end me-3">
                            <p class="color-gray-1">Email</p>
                        </div>
                        <div class="col text-start">
                            <p id="confirmEmail">{{ old('hiddenEmail') }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-end me-3">
                            <p class="color-gray-1">Subject</p>
                        </div>
                        <div class="col text-start">
                            <p id="confirmSubject">{{ old('hiddenSubject') }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-end me-3">
                            <p class="color-gray-1">Message</p>
                        </div>
                        <div class="col text-start">
                            <p id="confirmMessage">{{ old('hiddenMessage') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 d-flex justify-content-center mb-5">
                <button type="button" class="btn btn-outline-dark w-25 button-modal" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="submit" class="btn btn-dark w-25 button-modal">
                    Send
                </button>
            </div>
        </div>
    </div>
</div>

