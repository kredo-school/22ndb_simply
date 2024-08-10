<div class="mt-3">
    <!-- Show all comments here -->
    @if($donationItem->comments->isNotEmpty())
    <hr>
    <ul class="list-group">
        @foreach($donationItem->comments->take(3) as $comment)
        <li class="list-group-item border-0 p-0 mb-2">
            <a href="{{ route('profile.show', $comment->user->id ) }}" class="text-decoration-none text-dark fw-bold">{{ $comment->user->name }}</a>
            &nbsp;
            <p class="d-inline fa-light">{{ $comment->body }}</p>

            <form action="{{ route('comment.destroy', $comment->id)}}" method="post">
                @csrf
                @method('DELETE')

                <span class="text-uppercase text-secondary small">{{date('M d, Y', strtotime($comment->created_at)) }}</span>

                <!-- If the Auth user is the owner of the comment, show Dlete btn.-->

                @if(Auth::user()->id === $comment->user_id)
                &middot;
                <button type="submit" class="border-0 bg-transparent text-danger p-0 xsmall">Delete</button>
                @endif
            </form>
        </li>
        @endforeach

        @if($post->comments->count() > 3)
            <li class="list-group-item border-0 px-0 pt-0">
                <a href="{{ route('donated.item.show', $donationItem->id) }}" class="text-decoration-none small">View all {{ $donationItem->comments->count() }} comments</a>
            </li>
        @endif
    </ul>
    @endif

    <form action="{{ route('comment.store', $donationItem->id) }}" method="post">
        @csrf

        <div class="input-group">
            <textarea name="comment_body{{ $donationItem->id }}" cols="30" rows="1" class="form-control form-control-sm" placeholder="Add a comment...">{{ old('comment_body' . $donationItem->id) }}</textarea>
            <button type="submit" class="btn btn-outline-secondary btn-sm">
                <i class="fa-solid fa-paper-plane"></i>
            </button>
        </div>
        <!-- Error -->
        @error('comment_body' . $donationItem->id)
        <div class="text-danger small">{{ $message }}</div>
        @enderror

    </form>
</div>