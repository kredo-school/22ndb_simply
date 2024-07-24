

<link rel="stylesheet" href="{{ asset('/css/modal.css') }}">


<div class="modal fade" id="edit_category-{{ $category['id'] }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-solid rounded-5 p-3">
            <div class="modal-header border-0 m-auto">
                <h4 class="modal-title"><i class="fa-solid fa-pen"></i> Edit Category</h4>
            </div>
            <div class="modal-body">
                <label for="edit_category_name" class="form-label">Category Name</label>
                <input type="text" name="edit_category_name" id="edit_category_name" class="form-control" placeholder="{{ $category->name }}">
            </div>
            <div class="modal-footer border-0 m-auto p-4">
                <form method="POST" action="{{ route('edit.category', $category->id) }}">
                    @csrf
                    @method('PATCH')

                    <button type="button" class="sbm_btn btn btn-outline-dark p-2 px-5 rounded-5 me-1"  data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="sbm_btn btn btn-dark p-2 px-5 rounded-5 ms-1">Update</button>
                </form>
            </div>
        </div>
    </div>
</div> 