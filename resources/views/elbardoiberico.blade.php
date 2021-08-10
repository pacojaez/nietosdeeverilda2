<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('El Rincón de El Bardo Ibérico') }}
        </h2>
    </x-slot>
    
    @include('partials.navbardoiberico')

    <x-slot name="content">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            A VILLAFER
        </h2>
    </x-slot>

    </x-app-layout>