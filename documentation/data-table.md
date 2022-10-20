# Data-table component
This component give you html with tailwind classes when you need to show data-table to your project.

You just need to copy below tag and paste at place you want to show data-table,

```html
<x-lx.table :isSearch="'true'" :hasFilters="'true'"> // Want to use feature then only SET to TRUE  only `isSearch` and `isFilters` want to use feature. 
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



Above is example for listing users into data-table,
Let's take an example for php file of livewire component which helps you to implement backend logic for
the same.

```php
<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;
    public $sortField = 'name';
    public $sortDirection = 'asc';
    public $statusFilter; // Key by which you can run `where` query for filters.
    public $statusFilters = [ // Values to show on HTML for filters.
        'active',
        'inactive'
    ];
    public $genderFilter;  // Key by which you can run `where` query for filters.
    public $genderFilters = [ // Values to show on HTML for filters.
        'male',
        'female'
    ];
    
    public function render()
    {
        $users = new User();
        if (!empty($this->statusFilter)) {
            $users = $users->where('status', $this->statusFilter);  
        }

        if (!empty($this->genderFilter)) {
            $users = $users->where('gender', $this->genderFilter);  
        }
        return view('livewire.admin.user.index', [
            'users' => $users->search($this->search)->orderBy($this->sortField, $this->sortDirection)->paginate(10),
        ]);
    }

    public function sortBy($field) // Function for sorting data by column.
    {
        $this->sortDirection = ($field == $this->sortField)
            ? ($this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc' ) : 'asc';
        $this->sortField = $field;
    }

    public function clearFilters() // This function will clear all filter values from filters.
    {
        $this->reset([
            'statusFilter',
            'genderFilter'
        ]);
    }
}
```

```html
<div>
<iframe frameBorder='0' width='640' height='360' webkitallowfullscreen mozallowfullscreen allowfullscreen src="https://www.awesomescreenshot.com/embed?id=11854785&shareKey=b385046de50adad1bd190daa2986dbbe"></iframe>
<div>
```

Go to [Documentation](../README.md)