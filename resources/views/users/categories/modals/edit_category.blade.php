

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
                <form method="POST" action="#">
                    @csrf
                
                <!-- Cancel Button -->
                <button type="submit" class="sbm_btn btn btn-light btn-sm p-2 px-5 rounded-5 me-1">Cancel</button>
                <!-- Update Button -->
                <a href="#" class="sbm_btn btn btn-dark btn-sm p-2 px-5 rounded-5 ms-1" id="editBtn{{ $category['id'] }}">Update</a>
                </form>
            </div>
        </div>
    </div>
</div> 