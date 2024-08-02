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
