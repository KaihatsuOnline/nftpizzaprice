<?php

namespace App\Http\Livewire\Post;

use App\Models\Post\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostSearch extends Component
{

    use WithPagination;

    public $search = '';
    public $page = 1;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];


    /**
     * Reset page to 1 if search parameter changed.
     */
    public function updatingSearch()
    {
        $this->resetPage();
    }


    /**
     * Search posts and return view.
     */
    public function render()
    {
        $posts = Post::where(Post::COL_TITLE, 'like', "%{$this->search}%")->paginate(5);
        return view('livewire.post.post-search', ['posts' => $posts]);
    }
}
