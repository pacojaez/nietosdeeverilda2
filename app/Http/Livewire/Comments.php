<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class Comments extends Component
{   
    public $comments;
    public $post;
    protected $_id;
    public $content;

    protected $listeners = ['CommentAdded' => 'addComment'];

    public function mount($_id){          
        $this->comments = Post::find($_id)->comments->sortByDesc('created_at');
        $this->post = Post::find($_id);
    }

    public function render()
    {   
        // dd($this->comments);

        return view('livewire.comments', [
            'comments' => $this->comments,
            'post' => $this->post
        ]);
    }

    public function addComment(){
        
        $validatedData = $this->validate([
            'content' => 'required', 
        ]);
        // dd($validatedData);
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['post_id'] = $this->post->id;
        $validatedData['image_id'] = $this->post->id;
        // $validatedData['post'] = $this->post;
        // dd($validatedData);
        Comment::create($validatedData);

        $this->content = '';
        $this->mount($this->post->id);
        
        // return redirect()->to('post', $this->_id);
    }

    public function removeComment($_id){
        Comment::destroy($_id);
        $this->mount($this->post->id);
    }
}