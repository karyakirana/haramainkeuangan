@props([
    'color'=>'primary'
])
<button {{ $attributes->class('btn btn btn-flush btn-link btn-active-color-info btn-color-'.$color) }} class="btn btn-link btn-color">{{$slot}}</button>
