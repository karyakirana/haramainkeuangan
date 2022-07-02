<div>
    <x-molecules.modal id="setCustomerModal" title="Daftar Customer" size="xl">
        <livewire:datatable.customer-set-table />
    </x-molecules.modal>
    @push('custom-scripts')
        <script>
            let customerModalId = document.getElementById('setCustomerModal');
            let setCustomerModal = new bootstrap.Modal(customerModalId);

            Livewire.on('setCustomer', function (){
                setCustomerModal.hide();
            })
        </script>
    @endpush
</div>
