@props([
    'title',
    'toolbar'=>null,
    'footer'
])
<div class="card shadow-sm">
    @isset($title)
    <div class="card-header">
        <h3 class="card-title">{{$title}}</h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-light">
                {{$toolbar}}
            </button>
        </div>
    </div>
    @endisset
    <div class="card-body">
        {{$slot}}
    </div>
    @isset($footer)
    <div class="card-footer">
        {{$footer}}
    </div>
    @endisset
</div>
