<?php

namespace App\Http\Livewire\Post;

use App\Models\Post\Post;
use Livewire\Component;

class PostSearch extends Component
{


    public $search = '';
    public $page = 1;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];



    public function render()
    {
        $posts = Post::where(Post::COL_TITLE, 'like', "%{$this->search}%")->get();
        return view('livewire.post.post-search', ['posts' => $posts]);
    }
}
