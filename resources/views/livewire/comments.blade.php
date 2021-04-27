 
<div class="container flex flex-col justify-between min-h-screen min-w-full bg-white text-gray-800 leading-normal">
    <div class="w-full w-full container max-w-xl mx-auto p-6">
      <div class="max-w-full lg:flex border border-gray-400 bg-white rounded-b">
        <div class="p-4 flex flex-col justify-between leading-normal">
          <h1 class="text-3xl">Comments</h1>
          @error('newComment') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
          <div>
              @if (session()->has('message'))
              <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
                  {{ session('message') }}
              </div>
              @endif
          </div>
          <form class="my-4 flex" wire:submit.prevent="addComment">
            <textarea name="" id="" cols="30" rows="10"  wire:model.lazy="content" id="comment_content" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="Por si quieres comentar"></textarea>
            <div class="py-2">
                <button class="p-2 bg-blue-500 w-20 rounded shadow text-white">Add</button>
            </div>
          </form>
          @foreach( $comments as $comment)
          <div class="rounded border shadow p-3 my-2">
            <div class="flex justify-between my-2">
                <div class="flex">
                    <p class="font-bold text-lg">{{$comment->user->name}}</p>
                    <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$comment->created_at->diffForHumans()}}</p>
                </div>
                @if(auth()->user()->id == $comment->user_id)
                <i class="fas fa-times text-red-200 hover:text-red-600 cursor-pointer"
                    wire:click="removeComment({{$comment->id}})"></i>
                @endif
            </div>
            <p class="text-gray-800">{{$comment->content}}</p>
            <div class="flex justify-between my-2">
              <div class="flex">
                  {{-- <p class="font-bold text-lg">{{$comment->user->name}}</p> --}}
                  {{-- <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$comment->created_at->diffForHumans()}}  --}}
                  </p>
              </div>
              {{-- <p class="text-red-200 hover:text-red-600 cursor-pointer text-sm mr-0">Reply</p>  --}}
            </div>
            {{-- @if($comment->parent_id)
              <div class="rounded border shadow p-3 my-2 bg-red-200">
                <div class="flex justify-between my-2">
                  {{ $comment->id}}
                </div>
              </div>
            @endif          --}}
          </div>
          @endforeach
        </div>
      </div>
      <br />        
    </div>
  </div> 



{{-- <div>
    <h1 class="text-3xl">Comments</h1>
    @error('newComment') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
    <div>
        @if (session()->has('message'))
        <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm">
            {{ session('message') }}
        </div>
        @endif
    </div>

    {{-- <section>
        @if($image)
        <img src={{$image}} width="200" />
        @endif
        <input type="file" id="image" wire:change="$emit('fileChoosen')">
    </section> --}}
{{-- 
    <form class="my-4 flex" wire:submit.prevent="addComment">
        <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's in your mind."
            wire:model.debounce.500ms="newComment">
        <div class="py-2">
            <button type="submit" class="p-2 bg-blue-500 w-20 rounded shadow text-white">Add</button>
        </div>
    </form>
    @if($comments)
        @foreach($comments as $comment)
        <div class="rounded border shadow p-3 my-2">
            <div class="flex justify-between my-2">
                <div class="flex">
                    {{-- <p class="font-bold text-lg">{{$comment->user->name}}</p> --}}
                    {{-- <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">{{$comment->created_at->diffForHumans()}} --}}
                    {{-- </p>
                </div>
                <i class="fas fa-times text-red-200 hover:text-red-600 cursor-pointer"
                    wire:click="remove({{$comment->id}})"></i>
            </div>
            <p class="text-gray-800">{{$comment->content}}</p> --}}
            {{-- @if($comment->image)
            <img src="{{$comment->imagePath}}" />
            @endif --}}
        {{-- </div>
        @endforeach
        {{$comments->links('pagination-links')}}
    @endif

    
</div> --}}
{{-- 
<script>
    window.livewire.on('fileChoosen', () => {
        let inputField = document.getElementById('image')
        let file = inputField.files[0]
        let reader = new FileReader();
        reader.onloadend = () => {
            window.livewire.emit('fileUpload', reader.result)
        }
        reader.readAsDataURL(file);
    })
</script> --}}