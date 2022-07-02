<x-atoms.table-td width="10%">
    {{$row->kode}}
</x-atoms.table-td>
<x-atoms.table-td width="30%">
    {{$row->nama}}
</x-atoms.table-td>
<x-atoms.table-td width="10%" align="center">
    {{$row->diskon}}%
</x-atoms.table-td>
<x-atoms.table-td width="35%">
    {{$row->alamat}}
</x-atoms.table-td>
<x-atoms.table-td width="15%" align="center">
    <x-atoms.button-icon wire:click="$emit('setCustomer', '{{$row->id}}')"><i class="fas fs-3 fa-file-import"></i></x-atoms.button-icon>
</x-atoms.table-td>
