<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>
        <div class="container mx-auto mt-2">
            @livewire('users-table')
        </div>
</x-app-layout>