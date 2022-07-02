@props(['label', 'error'=>null, 'name'=>null, 'required'=>null])
<div
    x-data
    x-id="['input']"
    {{$attributes->class('row')}}>
    <label x-bind:for="$id('input')" class="col-form-label col-4 mb-5 {{$required}}">{{$label}}</label>
    <div class="col-8">
        {{ $slot }}
    </div>
</div>
