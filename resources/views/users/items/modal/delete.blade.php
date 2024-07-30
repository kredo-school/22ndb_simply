@include('users.components.deletemodal', [
    'id' => 'delete-item',
    'title' => 'Delete Item',
    'body' =>
        '<p class="h5 text-center">Are you sure you want to delete this item?</p>
         <p class="h6 text-muted text-center">
            This item will be permanently deleted from all pages! <br>
            This cannot be undone.
         </p>',
    'r2' => route('item.destroy', $item->id)
])

{{-- <div class="modal fade" id="delete-item">
    <div class="modal-dialog modal-dialog-scrollable custom-modal" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
            </div>
            <div class="modal-body border-0">
                <h2 class="modal-title text-danger text-center d-flex align-items-center justify-content-center" id="modalTitleId">
                    <i class="fa-solid fa-trash-can icon-md me-3"></i> Delete Item
                </h2>
                <p class="text-center letter-size">Are you sure to delete your item?</p>
            </div>
            <div class="modal-footer border-0 d-flex justify-content-center">

                <button type="button" class="btn btn-outline-danger btn-rounded" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="button" class="btn btn-danger btn-rounded">Delete</button>
            </div>
        </div>
    </div>
</div> --}}
