@props(['page'])
<x-layouts.base :title="$page->title">
    <div class="flex flex-col h-full">
        <x-header />
        <div class="grow">
            <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
        </div>
        <x-footer />
    </div>
</x-layouts.base>