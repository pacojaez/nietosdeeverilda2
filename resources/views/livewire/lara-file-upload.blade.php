    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-1">
            {{ __('Upload_Photo') }}
        </h2>
    </x-slot>
<div>
@if (session()->has('message')) 
    <div class="alert alert-success"> {{ session('message') }} </div>
@endif
<div class="container mx-auto mt-2 p-2 h-full flex rounded-lg shadow overflow-hidden justify-center">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-1">RELLENA LOS CAMPOS Y GUARDA LA FOTO</h2>
</div>
<div class="container mx-auto mt-2 p-2 h-full flex rounded-lg shadow overflow-hidden">
    <div class="w-full xl:w-1/2 p-8  m-3 p-2">
        <form wire:submit.prevent="submit" enctype="multipart/form-data"> 
            <div class="form-group mb-4 mt-6"> 
                <label for="exampleInputName" class="block text-gray-700 text-sm font-semibold mb-2">Título</label> 
                <input type="text" class="form-control text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10" id="exampleInputName" placeholder="Lo que se te ocurra" wire:model="title"> 
                @error('title') 
                <span class="text-danger">{{ $message }}</span> 
                @enderror 
            </div>
            <div class="form-group mb-4 mt-6">      
                <label for="exampleInputName">Subtitulo</label> 
                <input type="text" class="form-control text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10" id="exampleInputName" placeholder="Algo que tenga que ver con la foto, o no :)" wire:model="body"> 
                @error('body') 
                <span class="text-danger">{{ $message }}</span> 
                @enderror 
            </div>
            <div class="form-group mb-4 mt-6">
                <label for="exampleInputName">Descripción</label>
                <textarea name="description" rows="10" cols="50" placeholder="Por si te apetece escribir más" wire:model="description" class="text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10"></textarea> 
                @error('description') 
                <span class="text-danger">{{ $message }}</span> 
                @enderror 
            </div>
            <div class="form-group mb-4 mt-6">      
                <label for="exampleInputName">Lugar</label> 
                <input type="text" class="form-control text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10" id="exampleInputName" placeholder="¿Donde estabas?" wire:model="place"> 
                @error('place') 
                <span class="text-danger">{{ $message }}</span> 
                @enderror 
            </div>
            <div class="form-group mb-4 mt-6">      
                <label for="exampleInputName">Fecha aproximada</label> 
                <input type="text" class="form-control text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10" id="exampleInputName" placeholder="Solo el año, ejem: 1982" wire:model="date"> 
                @error('date') 
                <span class="text-danger">{{ $message }}</span> 
                @enderror 
            </div>
            
            <div class="form-group mb-4 mt-6"> 
                <label for="exampleInputName">File</label><span wire:dirty wire:target="file_name">Processing...</span> 
                
                <input type="file" class="form-control text-sm appearance-none rounded w-full py-2 px-3 text-gray-700 bg-gray-200 leading-tight focus:outline-none focus:shadow-outline h-10" id="exampleInputName" wire:model="file_name"> 
                @error('name')
                 
                <span class="text-danger">{{ $message }}</span> 
                @enderror 
            </div> 
            <button type="submit" class="w-full bg-gray-800 hover:bg-grey-900 text-white text-sm py-2 px-4 font-semibold rounded focus:outline-none focus:shadow-outline h-10">Save</button>
        </form>   
    </div>
    <div class="w-full xl:w-1/2 p-8 m-3 p-2">
        Photo Preview:     
            <div wire:dirty wire:target="file_name" class="w-full h-full fixed block top-0 left-0 bg-white opacity-75 z-50">
                <span class="text-green-500 opacity-75 top-1/2 my-0 mx-auto block relative w-0 h-0" style="top: 50%;">
                  <i class="fas fa-circle-notch fa-spin fa-5x"></i>
                </span>
            </div>      
        @if ($file_name)
            <img src="{{ $file_name->temporaryUrl() }}">
        @endif
    </div>
</div>
</div>