@props([
    'width'=>'auto',
    'align'=>'center'
])
<th {{ $attributes->class(['fw-bolder text-'.$align])->merge(['style'=>'width: '.$width]) }} style="width: {{$width}}">{{$slot}}</th>
