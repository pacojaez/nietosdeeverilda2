<x-slot name="header">
    <h2 class="mb-1 text-xl font-semibold leading-tight text-gray-800">
        {{ __('Subir una foto') }}
    </h2>
</x-slot>
<div>
    @if (session()->has('message'))
    <div class="alert alert-success"> {{ session('message') }} </div>
    @endif
    <div class="container flex justify-center h-full p-2 mx-auto mt-2 overflow-hidden rounded-lg shadow">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">RELLENA LOS CAMPOS Y GUARDA LA FOTO</h2>
    </div>
    <div class="container flex flex-col h-full p-2 mx-auto overflow-hidden rounded-lg shadow md:flex-row">
        <div class="w-full p-2 p-8 m-3 xl:w-1/2">
            <form wire:submit.prevent="submit" enctype="multipart/form-data">
                @csrf
                <div class="mt-6 mb-4 form-group">
                    <label for="exampleInputName" class="block mb-2 text-sm font-semibold text-gray-700">Título</label>
                    <input type="text"
                        class="w-full h-10 px-3 py-2 text-sm leading-tight text-gray-700 bg-gray-200 rounded appearance-none form-control focus:outline-none focus:shadow-outline"
                        id="exampleInputName" placeholder="Lo que se te ocurra" wire:model="title">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-6 mb-4 form-group">
                    <label for="exampleInputName">Subtitulo</label>
                    <input type="text"
                        class="w-full h-10 px-3 py-2 text-sm leading-tight text-gray-700 bg-gray-200 rounded appearance-none form-control focus:outline-none focus:shadow-outline"
                        id="exampleInputName" placeholder="Algo que tenga que ver con la foto, o no :)"
                        wire:model="body">
                    @error('body')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-6 mb-4 form-group">
                    <label for="exampleInputName">Descripción</label>
                    <textarea name="description" rows="10" cols="50" placeholder="Por si te apetece escribir más"
                        wire:model="description"
                        class="w-full h-10 px-3 py-2 text-sm leading-tight text-gray-700 bg-gray-200 rounded appearance-none focus:outline-none focus:shadow-outline"></textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-6 mb-4 form-group">
                    <label for="exampleInputName">Lugar</label>
                    <input type="text"
                        class="w-full h-10 px-3 py-2 text-sm leading-tight text-gray-700 bg-gray-200 rounded appearance-none form-control focus:outline-none focus:shadow-outline"
                        id="exampleInputName" placeholder="¿Donde estabas?" wire:model="place">
                    @error('place')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-6 mb-4 form-group">
                    <label for="exampleInputName">Fecha aproximada</label>
                    <input type="text"
                        class="w-full h-10 px-3 py-2 text-sm leading-tight text-gray-700 bg-gray-200 rounded appearance-none form-control focus:outline-none focus:shadow-outline"
                        id="exampleInputName" placeholder="Solo el año, ejem: 1982" wire:model="date">
                    @error('date')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mt-6 mb-4 form-group">
                    <label for="exampleInputName">File</label><span wire:dirty
                        wire:target="file_name">Processing...</span>

                    <input type="file"
                        class="w-full h-10 px-3 py-2 text-sm leading-tight text-gray-700 bg-gray-200 rounded appearance-none form-control focus:outline-none focus:shadow-outline"
                        id="exampleInputName" wire:model="file_name">
                    @error('name')

                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full h-10 px-4 py-2 text-sm font-semibold text-white bg-gray-800 rounded hover:bg-grey-900 focus:outline-none focus:shadow-outline">Guardar</button>
            </form>
        </div>
        <div class="w-full p-2 p-8 m-3 xl:w-1/2">
            Photo Preview:
            <div wire:dirty wire:target="file_name"
                class="fixed top-0 left-0 z-50 block w-full h-full bg-white opacity-75">
                <span class="relative block w-0 h-0 mx-auto my-0 text-green-500 opacity-75 top-1/2" style="top: 50%;">
                    <i class="fas fa-circle-notch fa-spin fa-5x"></i>
                </span>
            </div>
            @if ($file_name)
            <img src="{{ $file_name->temporaryUrl() }}">
            @endif
        </div>
    </div>
</div>
