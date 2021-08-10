<x-app-layout>
    {{-- <x-slot name="header">
        {{-- <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('El Rincón de El Bardo Ibérico') }}
        </h2>
    </x-slot> --}}

    @include('partials.navbardoiberico')

    <x-slot name="content">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            A VILLAFER
        </h2>
    </x-slot>

    </x-app-layout>
