<?php 

namespace App\Http\Livewire; 

use Livewire\Component;

use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class LaraFileUpload extends Component
{ 
    use WithFileUploads; 
    
    public $title, $body, $date, $place, $file_name, $description;
    public $processing = false;

    public function submit() 
    {   
        $id = Auth::id();

        $data = $this->validate([ 
            'title' => 'required',
            'body' => 'required',
            'description' => 'required',
            'place' => 'required',
            'date' => 'required', 
            'file_name' => 'required|image|max:2048', 
            ]);
        
        $image = $this->file_name;
        $name = substr( uniqid(rand(), true), 8,8 ).'.'.$image->getClientOriginalExtension();
        $img = Image::make($image->getRealPath())->encode('jpg', 65)->resize(800, null, function($c){
            $c->aspectRatio();
            $c->upsize();
        });
        $img->stream();
        Storage::disk('local')->put('public/images/posts'.'/'.$name, $img, 'public');

        
        // $this->processing = true;       
       
        // // $this->file_name = $filename;
        // // $foto = $this->file_name->store('posts', 'public');

        // $path = $this->file_name->file('file')->store('posts', 'public');
        // $filename = Image::make($this->file_name->getRealPath());
        // $filename->resize(800, null, function($constraint){
        //     $constraint->aspectRatio();
        //     $constraint->upsize();
        // });
        // $filename->orientate();

        // Image::make(storage_path($path))->resize(150,150)->save();
        // dd($filename);
        // $this->file_name = $filename;
        // $filename = $this->file_name->store('posts', 'public');
        // dd($img);  
        
        $data['file_name'] = $name;
        $data['user_id'] = $id;

        Post::create($data);

        $this->processing = false; 
        
        session()->flash('message', 'File has been successfully Uploaded.');

            // $image_resize = Image::make($request->archivo->getRealPath());
            // $image_resize->resize(800, null, function($constraint) {
            //     $constraint->aspectRatio();
            //     $constraint->upsize();
            // });
            // $image_resize->orientate();
            // $nombre_archivo = time() . "." . $request->archivo->extension();
            // $image_resize->save(public_path('storage/imagenes/' . $nombre_archivo));

        // $folderPath = 'livewire-tmp';

        // $dd = Storage::deleteDirectory($folderPath);

        // if($dd){
        //     session()->flash('message', 'File has been successfully Uploaded. Temp dir deleted successfully.');
        // }else{
        //     session()->flash('message', 'OOps. Something went wrong');
        // }
       
        return redirect()->to('/dashboard'); 
    } 
        
        
    public function render() 
    { 
        return view('livewire.lara-file-upload'); 
    }
} 