<x-atoms.table-td>
    {{$row->customer->kode}}
</x-atoms.table-td>
<x-atoms.table-td>
    {{$row->customer->nama}}
</x-atoms.table-td>
<x-atoms.table-td align="end">
    {{rupiah_format($row->saldo)}}
</x-atoms.table-td>
<x-atoms.table-td align="center">
    <x-atoms.button-icon wire:click="$emit('detailPiutangModal', '{{$row->customer_id}}')"><i class="fas fs-4 fa-file"></i></x-atoms.button-icon>
</x-atoms.table-td>
