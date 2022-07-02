<div>
    <x-molecules.modal id="setPenjualanModal" title="Daftar Customer" size="xl">
    </x-molecules.modal>
    @push('custom-scripts')
        <script>
            let penjualanModalId = document.getElementById('setPenjualanModal');
            let setPenjualanModal = new bootstrap.Modal(customerModalId);

            Livewire.on('setCustomer', function (){
                setPenjualanModal.hide();
            })
        </script>
    @endpush
</div>
