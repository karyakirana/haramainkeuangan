<div>
    <x-molecules.card title="Form Penerimaan Penjualan">
        <div class="row">
            <div class="col-8">
                <form>
                    <div class="row mb-5">
                        <div class="col-6">
                            <x-atoms.input-group label="Tanggal">
                                <x-atoms.input-singledate id="tanggal" />
                            </x-atoms.input-group>
                        </div>
                        <div class="col-6">
                            <x-atoms.input-group label="Customer">
                                <x-atoms.input-text data-bs-toggle="modal" data-bs-target="#setCustomerModal" wire:model.defer="customer_nama"/>
                            </x-atoms.input-group>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-6">
                            <x-atoms.input-group label="Akun Kas">
                                <x-atoms.input-text />
                            </x-atoms.input-group>
                        </div>
                        <div class="col-6">
                            <x-atoms.input-group label="Nominal Kas">
                                <x-atoms.input-text />
                            </x-atoms.input-group>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-6">
                            <x-atoms.input-group label="Akun Piutang">
                                <x-atoms.input-text />
                            </x-atoms.input-group>
                        </div>
                        <div class="col-6">
                            <x-atoms.input-group label="Nominal Piutang">
                                <x-atoms.input-text />
                            </x-atoms.input-group>
                        </div>
                    </div>
                </form>
                <x-atoms.table>
                    <x-slot name="thead">
                        <tr>
                            <x-atoms.table-th width="10%">ID</x-atoms.table-th>
                            <x-atoms.table-th width="20%">Penjualan</x-atoms.table-th>
                            <x-atoms.table-th width="20%">Biaya</x-atoms.table-th>
                            <x-atoms.table-th width="20%">PPN</x-atoms.table-th>
                            <x-atoms.table-th width="20%">Total Bayar</x-atoms.table-th>
                            <x-atoms.table-th width="10%"></x-atoms.table-th>
                        </tr>
                    </x-slot>
                    <x-slot name="tfoot">
                    </x-slot>
                </x-atoms.table>
            </div>
            <div class="col-4">
                <form class="mt-5 p-5 border">
                    <x-atoms.input-group-horizontal label="Penjualan ID">
                        <x-atoms.input-text readonly/>
                    </x-atoms.input-group-horizontal>
                    <x-atoms.input-group-horizontal label="Total Penjualan">
                        <x-atoms.input-text readonly/>
                    </x-atoms.input-group-horizontal>
                    <x-atoms.input-group-horizontal label="Akun Biaya">
                        <x-atoms.input-text readonly/>
                    </x-atoms.input-group-horizontal>
                    <x-atoms.input-group-horizontal label="Biaya Lain">
                        <x-atoms.input-text readonly/>
                    </x-atoms.input-group-horizontal>
                    <x-atoms.input-group-horizontal label="Akun PPN">
                        <x-atoms.input-text readonly/>
                    </x-atoms.input-group-horizontal>
                    <x-atoms.input-group-horizontal label="PPN">
                        <x-atoms.input-text readonly/>
                    </x-atoms.input-group-horizontal>
                    <x-atoms.input-group-horizontal label="Total Bayar">
                        <x-atoms.input-text readonly/>
                    </x-atoms.input-group-horizontal>
                </form>
            </div>
        </div>
    </x-molecules.card>
    <livewire:modals.set-customer-modal/>
</div>
