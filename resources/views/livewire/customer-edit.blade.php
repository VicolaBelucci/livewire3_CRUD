<div>
    <x-dialog-modal wire:model.live="modalCustomerEdit" submit="update">
        <x-slot name="title">
            Form Edit Customer
        </x-slot>
    
        <x-slot name="content">
            <div class="grid grid-cols-12 gap-4">
                
                <!-- Name -->
                <div class="col-span-12">
                    <x-label for="form.name" value="Name"/>
                    <x-input id="form.name" wire:model="form.name" type="text" class="mt-1 w-full"  autocomplete="form.name"/>
                    <x-input-error for="form.name" class="mt-1"/>
                </div>

                 <!-- Email -->
                 <div class="col-span-12">
                    <x-label for="form.email" value="Email"/>
                    <x-input id="form.email" wire:model="form.email" type="text" class="mt-1 w-full"  autocomplete="form.email"/>
                    <x-input-error for="form.email" class="mt-1"/>
                </div>

                 <!-- Address -->
                 <div class="col-span-12">
                    <x-label for="form.address" value="Address"/>
                    <x-input id="form.address" wire:model="form.address" type="text" class="mt-1 w-full"  autocomplete="form.address"/>
                    <x-input-error for="form.address" class="mt-1"/>
                </div>

            </div>         
        </x-slot>
    
        <x-slot name="footer">
            <x-secondary-button @click="$wire.set('modalCustomerEdit', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-secondary-button>
    
            <x-button class="ml-3" @click="$wire.set('modalCustomerEdit', false)"  wire:loading.attr="disabled">
                Editar
            </x-button>
        </x-slot>
    </x-dialog-modal> 
</div>
