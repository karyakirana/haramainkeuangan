@props([
    'width'=>'auto',
    'align'=>'left'
])
<td {{ $attributes->class(['text-'.$align])->merge(['style'=>'width: '.$width]) }} >{{$slot}}</td>
