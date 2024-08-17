<div class="modal fade" id="{{ $id }}">
    <div class="modal-dialog modal-dialog-centered custom-modal">
        <div class="modal-content p-4 d-flex align-items-center">
            <div class="modal-header h4 border-0">
                <div class="modal-title text-danger">
                    <i class="fa-solid fa-trash-can me-3 text-danger align-middle icon-md"></i>{{$title}}
                </div>
            </div>
            {{-- Body --}}
            <div class="modal-body text-center ">
                {{ $body }}
            </div>
            {{-- Footer --}}
            <div class="modal-footer w-100 mb-3 border-0 d-flex justify-content-center">
                <form action="{{ $r2 }}" method="post">
                    @csrf
                    @method('DELETE')

                    {{-- Btn --}}
                    @include('users.components.btn', [
                        'r' => '#',
                        'color' => 'danger',
                        'name' => 'Delete',
                        'modal' => true
                    ])
                </form>
            </div>
        </div>
    </div>
</div>
