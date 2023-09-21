<div>
    <x-select wire:model.live="paginate" class="text-sm mt-4">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="50">50</option>
        <option value="100">100</option>
    </x-select>
    <table class="w-full mt-8">
        <thead>
            <tr>
                <th class="p-2 whitespace-nowrap border border-spacing-1">#</th>
                <th class="p-2 whitespace-nowrap cursor-pointer">Action</th>
                <th @click="$wire.sortField('id')" class="p-2 whitespace-nowrap cursor-pointer">
                    <x-sort :$sortDirection : $sortBy :field="'id'" />ID
                </th>
                <th @click="$wire.sortField('name')" class="p-2 whitespace-nowrap cursor-pointer">
                    <x-sort :$sortDirection : $sortBy :field="'name'" />name
                </th>
                <th @click="$wire.sortField('email')" class="p-2 whitespace-nowrap cursor-pointer">
                    <x-sort :$sortDirection : $sortBy :field="'email'" />Email
                </th>
                <th  @click="$wire.sortField('address')" class="p-2 whitespace-nowrap cursor-pointer">
                    <x-sort :$sortDirection : $sortBy :field="'address'" />Address
                </th>
            </tr>
            <tr>
                <td class="p-2 border border-spacing-1"></td>
                <td class="p-2 border border-spacing-1"></td>
                <td><x-input wire:model.live="form.id" type="search" class="w-full text-sm"/></td>
                <td><x-input wire:model.live="form.name" type="search" class="w-full text-sm"/></td>
                <td><x-input wire:model.live="form.email" type="search" class="w-full text-sm"/></td>
                <td><x-input wire:model.live="form.address" type="search" class="w-full text-sm"/></td>
            </tr>
        </thead>

        <tbody>
            @isset($data)
                @foreach($data as $customer)
                    <tr>
                        <td class="p-2 border border-spacing-1 text-center">{{$loop->iteration}}.</td>
                        <td class="p-2 border border-spacing-1">
                            <x-button @click="$dispatch('dispatch-customer-table-edit', { id: '{{ $customer->id }}'})" type="button"> Edit </x-button>
                            <x-danger-button @click="$dispatch('dispatch-customer-table-delete', {id: '{{ $customer->id }}', name: '{{$customer->name}}' })"> Delete </x-danger-button>
                        </td>
                        <td class="p-2 border border-spacing-1 text-center">{{$customer->id}}</td>
                        <td class="p-2 border border-spacing-1">{{$customer->name}}</td>
                        <td class="p-2 border border-spacing-1">{{$customer->email}}</td>
                        <td class="p-2 border border-spacing-1">{{$customer->address}}</td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>

    <div class="mt-3">{{$data->onEachSide(1)->links()}}</div>
</div>
