<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class ShowPosts extends Component
{   

    use WithPagination;

    protected $posts;
    public $perPage= 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = false;
    public $noImages;

    public $decade;
    public $listeners = ['searchByDecade'];
    public $maxprice = 2021;


    public function render()
    {   
        
        $this->posts =  Post::search($this->search)
                            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                            ->simplePaginate($this->perPage);

        return view('livewire.show-posts', [
            'posts' => $this->posts,
        ]);
    }
}
