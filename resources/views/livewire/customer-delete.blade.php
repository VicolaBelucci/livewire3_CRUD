<div>
    <x-dialog-modal wire:model.live="modalCustomerDelete" submit="delete">
        <x-slot name="title">
            Form Delete Customer
        </x-slot>
    
        <x-slot name="content">
            <p>Deseja excluir o registro de ID {{$id}} ? </p>
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCustomerDelete', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
    
            <x-danger-button  class="ml-3" @click="$wire.delete()"  wire:loading.attr="disabled">
                Deletar
            </x-danger-button>
        </x-slot>
    </x-dialog-modal> 
</div>
