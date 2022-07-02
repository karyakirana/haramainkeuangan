@aware(['error', 'name'])
@props([
    'type'=>'text',
    'name'=>null
])
<input x-bind:id="$id('input')" {{ $attributes->class(['form-control', 'is-invalid'=>$errors->has($name)])->merge(['type'=>$type, 'name'=>$name]) }} >
@error($name)
<span class="invalid-feedback">{{$message}}</span>
@enderror
