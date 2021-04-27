<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostCard extends Component
{   
    use WithPagination;

    protected $post;
    protected $comments;
    public $noImages;
    public $_id;
    public $newComment;

    public function mount($_id){
        $this->post = DB::table('posts')
                    ->where('id', '=', $this->_id)->first();
        // $this->comments = DB::table('comments')
        //             ->where('image_id','=', $_id)->get();
        $this->comments = Post::find($_id)->comments;

    }
    
    public function render()
    {   
        // dd($this->post);
        return view('livewire.post-card', [
            'post' => $this->post,
            'comments' => $this->comments
        ]);
    }

    private function resetInputFields(){
        $this->newComment = '';
    }

    // public function addComment( $post_id, $user){

    //    $validatedData = $this->validate([
    //         'content' => 'required', 
    //     ]);
    //     dd($validatedData);
    //     Comment::store($validatedData);

    //     session()->flash('message', 'Comment Added Successfully.');

    //     $this->resetInputFields();

    // }
}

