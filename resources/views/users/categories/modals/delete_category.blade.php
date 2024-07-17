<link rel="stylesheet" href="{{ asset('/css/delete_modal.css') }}">

<div class="modal fade" id="delete_category-{{ $category['id'] }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-solid rounded-5 p-3">
            <div class="modal-header border-0 m-auto">
                <h4 class="modal-title delete-modal-title"><i class="trash-icon fa-solid fa-trash-can"></i> Delete Category</h4>
            </div>
            <div class="modal-body text-center">
                <h4>Are you sure you want to delete “{{ $category->name }}”?</h4>
                <h5 class="delete-text">The items in “Kitchen” will go into “Others”.</h5>
            </div>
            <div class="modal-footer border-0 m-auto p-4">
                <form method="POST" action="#">
                    @csrf
                
                <!-- Cancel Button -->
                <button type="submit" class="cancel_btn btn btn-sm p-2 px-5 rounded-5 me-1">Cancel</button>
                <!-- Update Button -->
                <a href="#" class="delete_btn btn btn-sm p-2 px-5 rounded-5 ms-1" id="deleteBtn{{ $category['id'] }}">Delete</a>
                </form>
            </div>
        </div>
    </div>
</div> 