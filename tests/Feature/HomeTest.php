<?php

namespace Tests\Feature;

use App\Filament\Resources\HomeResource\Pages\ListHomes;
use App\Filament\Resources\HomeResource\Pages\ViewHome;
use App\Filament\Resources\HomeResource\Widgets\HomeItems;
use App\Models\Home;
use App\Models\Item;
use function Pest\Livewire\livewire;

it('Can list the homes', function () {
    livewire(ListHomes::class)->assertSuccessful();
});

it('can be search home by name', function () {
    $homes = Home::factory()->count(10)->create();

    $name = $homes->first()->name;

    livewire(ListHomes::class)
        ->searchTable($name)
        ->assertCanSeeTableRecords($homes->where('name', $name))
        ->assertCanNotSeeTableRecords($homes->where('name', '!=', $name));
});

it('it can be sorted correctly', function () {
    $homes = Home::factory()->count(10)->create();

    livewire(ListHomes::class)
        ->sortTable('name')
        ->assertCanSeeTableRecords($homes->sortBy('name'), inOrder: true)
        ->sortTable('name', 'desc')
        ->assertCanSeeTableRecords($homes->sortByDesc('name'), inOrder: true);
});


it('has the following columns - Name', function () {
    $columns = livewire(ListHomes::class)->instance()->getTable()->getColumns();

    $this->assertCount(1, $columns);
    livewire(ListHomes::class)
        ->assertTableColumnExists('name');
});
