<a href="{{ $r }}" class="btn btn-outline-{{ $color}} rounded-pill me-2 btn-custom"  @isset($modal)data-bs-dismiss="modal" @endisset>Cancel</a>

<button type="submit" class="btn btn-{{ $color}}  rounded-pill btn-custom">{{ $name }}</button>
