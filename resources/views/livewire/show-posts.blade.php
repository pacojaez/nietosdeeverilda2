<div class="pb-2 m-4">
    <div class="flex flex-col justify-center w-full pb-2 m-4 md:flex-row">
        <div class="relative m-2">
            <input wire:model.debounce.500ms="search" type="search" class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Buscar foto o personas...">
        </div>
        <div class="relative m-2">
            <select wire:model="orderBy" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="id">Orden de Subida</option>
                <option value="title">Titulo</option>
                <option value="file_name">Nombre de archivo</option>
                <option value="created_at">Fecha de Subida</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                {{-- <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> --}}
            </div>
        </div>
        <div class="relative m-2">
            <select wire:model="orderAsc" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                {{-- <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> --}}
            </div>
        </div>
        <div class="relative m-2">
            <select wire:model="perPage" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                {{-- <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> --}}
            </div>
        </div>
        {{-- <div class="relative flex items-center justify-center w-1/6 mx-1">
            <div x-data="range()" x-init="mintrigger(); maxtrigger()" class="relative w-full max-w-xl">
              <div>
                <input type="range"
                       step="1"
                       x-bind:min="min" x-bind:max="max"
                       x-on:input="mintrigger"
                       x-model="minprice"
                       class="absolute z-20 w-full h-2 opacity-0 appearance-none cursor-pointer pointer-events-none">

                <input type="range"
                       step="1"
                       x-bind:min="min" x-bind:max="max"
                       x-on:input="maxtrigger"
                       x-model="maxprice"
                       class="absolute z-20 w-full h-2 opacity-0 appearance-none cursor-pointer pointer-events-none">

                <div class="relative z-10 h-2">

                  <div class="absolute top-0 bottom-0 left-0 right-0 z-10 bg-gray-200 rounded-md"></div>

                  <div class="absolute top-0 bottom-0 z-20 bg-blue-300 rounded-md" x-bind:style="'right:'+maxthumb+'%; left:'+minthumb+'%'"></div>

                  <div class="absolute top-0 left-0 z-30 w-6 h-6 -mt-2 -ml-1 bg-blue-300 rounded-full" x-bind:style="'left: '+minthumb+'%'"></div>

                  <div class="absolute top-0 right-0 z-30 w-6 h-6 -mt-2 -mr-3 bg-blue-300 rounded-full" x-bind:style="'right: '+maxthumb+'%'"></div>

                </div>

              </div>

              <div class="flex items-center justify-between py-5">
                <div>
                  <input type="text" maxlength="4" x-on:input="mintrigger" x-model="minprice" class="w-24 px-3 py-2 text-center border border-gray-200 rounded">
                </div>
                <div>
                  <input type="text" maxlength="4" x-on:input="maxtrigger" x-model="maxprice" class="w-24 px-3 py-2 text-center border border-gray-200 rounded">
                </div>
              </div>

            </div>
        </div> --}}
    </div>
    {{-- <div class="flex w-full pb-10">
        <button
        class="px-4 py-2 font-semibold text-red-600 transition duration-200 ease-in transform bg-transparent border border-red-600 rounded hover:bg-red-600 hover:text-white hover:border-transparent hover:-translate-y-1 active:translate-y-0"
      >Order Now</button>
    </div>--}}
    {{-- @livewire('decades-component') --}}
    @if($noImages)
        <div>No hay Fotos con esos términos de búsqueda</div>
    @else
    {{-- <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            @foreach($posts as $post)
                                <div>
                                    <h2 class="px-4 py-2 border">{{ $post->id }}</h2>
                                    <h3 class="px-4 py-2 border">{{ $post->title }}</h3>
                                    {{-- <td class="px-4 py-2 border">{{ $post->body }}</td> --}}
                                    {{--<img src="\storage\public\{{ $post->file_name}}" />
                                    <div class="px-4 py-2 border">
                                    <button wire:click="edit({{ $post->id }})" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button>
                                    <button wire:click="delete({{ $post->id }})" class="px-4 py-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">Delete</button>
                                    </div>
                                </div>
                            @endforeach
                            {!! $posts->links() !!}
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container px-4 mx-auto my-12 md:px-12">
        <hr>
        {!! $posts->links() !!}
        <hr>
        <div class="flex flex-wrap mt-2 mb-2 -mx-1 lg:-mx-4">
            @foreach($posts as $post)
            <!-- Column -->
            <div class="w-full px-1 my-1 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

                <!-- Article -->
                <article class="overflow-hidden rounded-lg shadow-lg">
                    <a href="{{ route('post', $post->id) }}">

                        <img alt="{{ $post->title }}" class="block w-full h-auto" src="{{asset('storage/images/posts/'.$post->file_name)}}">
                    </a>
                    <header class="flex items-center justify-between p-2 leading-tight md:p-4">
                        <h1 class="text-lg">
                            <a class="font-bold text-black no-underline hover:underline" href="{{ route('post', $post->id) }}">
                               {{ $post->title }}
                            </a>
                        </h1>
                    </header>
                    <body>
                        <h2 class="text-sm text-lg text-grey-darker">
                            {{ $post->body }}
                        </h2>
                        <h3 class="text-sm text-grey-darker">
                            {{ $post->description}}
                        </h3>
                        <h3 class="text-sm text-grey-darker">
                            Estabamos en <span class="font-bold">{{ $post->place}}</span>
                        </h3>
                        <h3 class="text-sm text-grey-darker">
                            En <span class="font-bold">{{ $post->date}}</span>
                        </h3>
                    </body>
                    <footer class="flex items-center justify-between p-2 leading-none md:p-4">
                        {{-- <a class="flex items-center text-black no-underline hover:underline" href="#"> --}}
                            {{-- <img alt="{{ $post->title }}" class="block rounded-full" src="https://picsum.photos/32/32/?random"> --}}
                            <p class="ml-2 text-sm">
                                {{ $post->user->name }}
                            </p>
                        {{-- </a> --}}
                        {{-- <a class="no-underline text-grey-darker hover:text-red-dark" href="#"> --}}
                            <span class="hidden">Like</span>
                            <i class="fa fa-heart"></i>
                        {{-- </a> --}}
                        <p class="text-sm text-grey-darker">
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
