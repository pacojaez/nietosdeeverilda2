
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('IMAGENES') }}
        </h2>
    </x-slot>
        <div class="container mx-auto mt-2">
            @foreach(\App\Models\Post::all() as $post)
            <div class="border-b mb-5 pb-5 border-gray-200">
                <a href="/post/{{ $post->id }}" class="text-2xl font-bold mb-2">{{ $post->title }}</a>
                <p>{{ Str::limit($post->title, 100) }}</p>
            </div>
        @endforeach
        </div>
