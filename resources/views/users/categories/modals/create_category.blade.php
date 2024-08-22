
<link rel="stylesheet" href="{{ asset('/css/modal.css') }}">

<div class="modal fade" id="create-category" aria-hidden="true" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-solid rounded-5 p-3">
            <div class="modal-header border-0 m-auto">
                <h4 class="modal-title">
                <i class="fa-solid fa-circle-plus"></i> Create Category
                </h4>
            </div>

            <div class="modal-body">
                <form action="{{ route('create.category') }}" method="post">
                    @csrf
                    <label for="category_name" class="form-label">Category Name</label>
                    <input type="text" name="name" id="category_name" class="form-control" placeholder="Add category name"> 
                    <p class="text-danger">Please enter no more than 14 characters</p>
                   
            </div>
                <div class="modal-footer border-0 m-auto p-4">
                    <button type="button" data-bs-dismiss="modal" class="sbm_btn btn btn-outline-dark p-2 px-5 rounded-5 me-1">Cancel</button>
                    <button type="submit" class="sbm_btn btn btn-dark p-2 px-5 rounded-5 ms-1">Save</button>
                </div>
                </form> 
            </div>
        </div>
    </div>
</div.
