@props([
    'title'=>null,
    'footer',
    'size'=>'lg'
])
<div class="modal fade" {{ $attributes }} data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-{{$size}}">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{$slot}}
            </div>
            @isset($footer)
            <div class="modal-footer">
                {{$footer}}
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            @endisset
        </div>
    </div>
</div>
