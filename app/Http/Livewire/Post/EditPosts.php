<?php

namespace App\Http\Livewire\Post;

use App\Models\Post\Post;
use Livewire\Component;

class EditPosts extends Component
{

    

    public function render()
    {

        return view('livewire.post.edit-posts',[
            'posts' => Post::all(),
        ]);
    }
}
