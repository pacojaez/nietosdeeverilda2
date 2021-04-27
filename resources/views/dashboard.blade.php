<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuestro Album de Fotos') }}
        </h2>
    </x-slot>

    {{-- <x-app-layout> --}}
        @livewire('show-posts') 
    </x-app-layout>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                {{-- @livewire('post.index')
            </div>
        </div>
    </div> --}}
{{-- </x-app-layout> --}}
