<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-notification/>
                {{-- <x-button @click="$dispatch('notify', { title : 'sending notification'})">Click me</x-button> --}}
                <h1 class="text-3x1 mb-5">Customer</h1>

                @livewire('customer-create')
                @livewire('customer-table')
                @livewire('customer-edit')
                @livewire('customer-delete')

            </div>
            
        </div>
    </div>
</div>
