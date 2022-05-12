<?php

namespace App\Http\Livewire\Post;

use App\Models\Post\Post;
use Livewire\Component;

class UpdatePost extends Component
{

    public Post $post;
 
    protected $rules = [
        'post.title' => 'required',
        'post.content' => 'required',
    ];
 
    public function update()
    {
        $this->validate();
 
        $this->post->save();
 
        session()->flash('message', 'Post successfully updated.');

        return redirect()->to('/search-posts');
    }
}
