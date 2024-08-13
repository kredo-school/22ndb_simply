<link rel="stylesheet" href="{{ asset('/css/delete_modal.css') }}">

<div class="modal fade" id="delete_others-{{ $category['id'] }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-solid rounded-5 p-3">
            <div class="modal-header border-0 m-auto">
                <h4 class="modal-title delete-modal-title"><i class="trash-icon fa-solid fa-trash-can"></i> Delete "Others"</h4>
            </div>
            <div class="modal-body text-center">
                <h4>Are you sure you want to delete “Others”?</h4>
                <h5 class="delete-others">All your items in "Others" will be permanently deleted!
This cannnot be undone..</h5>
            </div>
            <div class="modal-footer border-0 m-auto p-4">
                <form method="POST" action="{{ route('delete.category', $category->id) }}">
                    @csrf
                    @method('DELETE')
                <button type="button" class="cancel_btn btn btn-outline-danger p-2 px-5 rounded-5 me-1"  data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="delete_btn btn btn-danger p-2 px-5 rounded-5 ms-1" id="deleteBtn{{ $category['id'] }}">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div> 