# Data-table component
This component give you html with tailwind classes when you need to show data-table to your project.

You just need to copy below tag and paste at place you want to show data-table,

```bash
<x-lx.table :isSearch="'true'" :hasFilters="'true'"> // SET to TRUE only `isSearch` and `isFilters` want to use feature. 
    <x-slot name="search">
        <x-lx.table.search :wireKey="'search'" :label="'Search user'" />
    </x-slot>
    <x-slot name="filters">
        <div class="space-y-4">
            <div class="space-y-2">
                <x-lx.form-inputs.label for="statusFilter" :value="'Status'" />
                <x-lx.form-inputs.select wire:model="statusFilter" class="w-full h-10" id="statusFilter">
                    <option value>Select Status</option>
                    @if (!empty($statusFilters))
                        @foreach ($statusFilters as $statusFilter)
                            <option value="{{ $statusFilter }}">{{ str()->ucfirst($statusFilter) }}</option>
                        @endforeach
                    @endif
                </x-lx.form-inputs.select>
            </div>

            <div class="space-y-2">
                <x-lx.form-inputs.label for="genderFilter" :value="'Gender'" />
                <x-lx.form-inputs.select wire:model="genderFilter" class="w-full h-10" id="genderFilter">
                    <option value>Select Status</option>
                    @if (!empty($genderFilters))
                        @foreach ($genderFilters as $genderFilter)
                            <option value="{{ $genderFilter }}">{{ str()->ucfirst($genderFilter) }}</option>
                        @endforeach
                    @endif
                </x-lx.form-inputs.select>
            </div>
        </div>

        <x-slot name="clearFilter">
            <button wire:click="clearFilters"
                class="inline-flex justify-center px-4 py-2 text-sm font-medium font-bold text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" type="button">Clear</button>
        </x-slot>
    </x-slot>

    <x-slot name="head">
        <x-lx.table.heading sortable wire:click="sortBy('name')" :direction="$sortField == 'name' ? $sortDirection : null">
        Name
        </x-lx.table.heading>
        <x-lx.table.heading>Email</x-lx.table.heading>
        <x-lx.table.heading>Gender</x-lx.table.heading>
        <x-lx.table.heading sortable wire:click="sortBy('status')" :direction="$sortField == 'created_at' ? $sortDirection : null">
        Status
        </x-lx.table.heading>
        <x-lx.table.heading sortable wire:click="sortBy('created_at')" :direction="$sortField == 'created_at' ? $sortDirection : null">
        Created On
        </x-lx.table.heading>
    </x-slot>
    
    <x-slot name="body">
        @if ($users->isNotEmpty())
            @foreach ($users as $user)
                <x-lx.table.row>
                    <x-lx.table.cell>{{ $user->name }}</x-lx.table.cell>
                    <x-lx.table.cell>{{ $user->email }}</x-lx.table.cell>
                    <x-lx.table.cell>{{ str()->ucfirst($user->gender) }}</x-lx.table.cell>
                    <x-lx.table.cell>{{ str()->ucfirst($user->status) }}</x-lx.table.cell>
                    <x-lx.table.cell>
                        {{ !empty($user->created_at) ? $user->created_at->diffForHumans() : '-' }}
                    </x-lx.table.cell>
                </x-lx.table.row>
            @endforeach
        @else
            <x-lx.table.row>
                <x-lx.table.cell colspan="5" class="text-center">No data found.</x-lx.table.cell>
            </x-lx.table.row>
        @endif
    </x-slot>

    <x-slot name="pagination">
        {{ $users->links() }}
    </x-slot>
</x-lx.table>
```

| :memo:        | We are using alpineJs so make sure that is added to your project.       |
|---------------|:------------------------|

Go to [Documentation](../README.md)