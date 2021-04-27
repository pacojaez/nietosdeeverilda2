<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class DecadesComponent extends Component
{
    public $post1930;
    protected $posts;

    protected $listeners = ['decade' => 'searchByDecade'];

    public function posts1930( ){

        $this->posts =  Post::where('date', '<=', '1960')
                            ->simplePaginate(15);

        dd($this->posts);

        return view('livewire.show-posts', [
            'posts' => $this->posts,
        ]);
    }

    public function render()
    {
        return view('livewire.decades-component');
    }
}
