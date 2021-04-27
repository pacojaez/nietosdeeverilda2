<div class="pb-2 m-4">
    <div class="w-full flex pb-2 m-4 justify-center">
        <div class="w-2/6 mx-1">
            <input wire:model.debounce.500ms="search" type="search" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Buscar foto o personas...">
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="orderBy" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="id">Orden de Subida</option>
                <option value="title">Titulo</option>
                <option value="file_name">Nombre de archivo</option>
                <option value="created_at">Fecha de Subida</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                {{-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> --}}
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="orderAsc" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                {{-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> --}}
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model="perPage" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                {{-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> --}}
            </div>
        </div>
        {{-- <div class="w-1/6 relative mx-1 flex justify-center items-center">
            <div x-data="range()" x-init="mintrigger(); maxtrigger()" class="relative max-w-xl w-full">
              <div>
                <input type="range"
                       step="1"
                       x-bind:min="min" x-bind:max="max"
                       x-on:input="mintrigger"
                       x-model="minprice"
                       class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
          
                <input type="range" 
                       step="1"
                       x-bind:min="min" x-bind:max="max"
                       x-on:input="maxtrigger"
                       x-model="maxprice"
                       class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">
          
                <div class="relative z-10 h-2">
          
                  <div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-200"></div>
          
                  <div class="absolute z-20 top-0 bottom-0 rounded-md bg-blue-300" x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>
          
                  <div class="absolute z-30 w-6 h-6 top-0 left-0 bg-blue-300 rounded-full -mt-2 -ml-1" x-bind:style="'left: '+minthumb+'%'"></div>
          
                  <div class="absolute z-30 w-6 h-6 top-0 right-0 bg-blue-300 rounded-full -mt-2 -mr-3" x-bind:style="'right: '+maxthumb+'%'"></div>
           
                </div>
          
              </div>
              
              <div class="flex justify-between items-center py-5">
                <div>
                  <input type="text" maxlength="4" x-on:input="mintrigger" x-model="minprice" class="px-3 py-2 border border-gray-200 rounded w-24 text-center">
                </div>
                <div>
                  <input type="text" maxlength="4" x-on:input="maxtrigger" x-model="maxprice" class="px-3 py-2 border border-gray-200 rounded w-24 text-center">
                </div>
              </div>
              
            </div>
        </div> --}}
    </div>
    {{-- <div class="w-full flex pb-10">
        <button
        class="py-2 px-4 bg-transparent text-red-600 font-semibold border border-red-600 rounded hover:bg-red-600 hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0"
      >Order Now</button> 
    </div>--}}
    {{-- @livewire('decades-component') --}}
    @if($noImages)
        <div>No hay Fotos con esos términos de búsqueda</div>
    @else
    {{-- <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">                      
                            @foreach($posts as $post)
                                <div>
                                    <h2 class="border px-4 py-2">{{ $post->id }}</h2>
                                    <h3 class="border px-4 py-2">{{ $post->title }}</h3>
                                    {{-- <td class="border px-4 py-2">{{ $post->body }}</td> --}}
                                    {{--<img src="\storage\public\{{ $post->file_name}}" />
                                    <div class="border px-4 py-2">
                                    <button wire:click="edit({{ $post->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                    <button wire:click="delete({{ $post->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </div>
                                </div>
                            @endforeach
                            {!! $posts->links() !!}                   
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            @foreach($posts as $post)
            <!-- Column -->
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
    
                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">
                    <a href="{{ route('post', $post->id) }}">
                        
                        <img alt="{{ $post->title }}" class="block h-auto w-full" src="{{asset('storage/images/posts/'.$post->file_name)}}">
                    </a>
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <h1 class="text-lg">
                            <a class="no-underline hover:underline text-black font-bold" href="{{ route('post', $post->id) }}">
                               {{ $post->title }}
                            </a>
                        </h1>
                    </header>
                    <body>
                        <h2 class="text-lg text-grey-darker text-sm">
                            {{ $post->body }}
                        </h2>
                        <h3 class="text-grey-darker text-sm">
                            {{ $post->description}}
                        </h3>
                        <h3 class="text-grey-darker text-sm">
                            Estabamos en <span class="font-bold">{{ $post->place}}</span>
                        </h3>
                        <h3 class="text-grey-darker text-sm">
                            En <span class="font-bold">{{ $post->date}}</span>
                        </h3>          
                    </body>
                    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                        {{-- <a class="flex items-center no-underline hover:underline text-black" href="#"> --}}
                            {{-- <img alt="{{ $post->title }}" class="block rounded-full" src="https://picsum.photos/32/32/?random"> --}}
                            <p class="ml-2 text-sm">
                                {{ $post->user->name }}
                            </p>
                        {{-- </a> --}}
                        {{-- <a class="no-underline text-grey-darker hover:text-red-dark" href="#"> --}}
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        {{-- </a> --}}
                        <p class="text-grey-darker text-sm">
                            Subida el <span class="font-bold">{{ $post->created_at}}</span>
                        </p>
                    </footer>  
                </article>
                <!-- END Article -->
    
            </div>
            <!-- END Column -->
            @endforeach        
        </div>
        <hr>
        {!! $posts->links() !!}
        <hr>
    </div>
    @endif
</div>


<script>
    function range() {
    return {
        minprice: 1930,
        maxprice: 2021,
        min: 1930,
        max: 2021,
        minthumb: 0,
        maxthumb: 0,

            mintrigger() {
                this.minprice = Math.min(this.minprice, this.maxprice - 1);
                this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;
            },

            maxtrigger() {
                this.maxprice = Math.max(this.maxprice, this.minprice + 1);
                this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);
            },
        }
    }
</script>