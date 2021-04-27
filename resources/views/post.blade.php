<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Foto de ') }}
        </h2>
    </x-slot>
   @livewire('post-card')    
   {{-- <div class="max-w-sm rounded overflow-hidden shadow-lg m-2 grid text-center justify-items-center">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/7.jpg">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{ $post->title}}</div>
      <p class="text-gray-700 text-base">
        {{ $post->title }}
      </p>
    </div>
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">Subida por:</div>
      <p class="text-gray-500 text-base">
        {{ $post->user->name }}
      </p>
    </div>
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">Hecha en:</div>
      <p class="text-gray-500 text-base">
        {{ $post->description }}
      </p>
      <div class="font-bold text-xl mb-2">Año:</div>
      <p class="text-gray-500 text-base">
        {{ $post->place }}
      </p>
    </div>
    <div class="px-6 pt-4 pb-2">
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>
    <!--COMMENTS -->
    <div class="container flex flex-col justify-between min-h-screen min-w-full bg-white text-gray-800 leading-normal">
      <div class="w-full w-full container max-w-xl mx-auto p-6">
        <div class="max-w-sm max-w-full lg:flex border border-gray-400 bg-white rounded-b">
          <div class="p-4 flex flex-col justify-between leading-normal">
            @if($comments)
                @foreach( $comments as $comment)
                {{-- @livewire('comments') 
                {{ $comment->content}}
                <h3>hello world</h3>
                @endforeach
            @endif
          </div>
        </div>
        <br />        
      </div>
    </div>  
</div> --}}
</x-app-layout>