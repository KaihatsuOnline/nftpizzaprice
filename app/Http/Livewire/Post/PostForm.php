<?php

namespace App\Http\Livewire\Post;

use App\Models\Post\Post;
use Livewire\Component;

class PostForm extends Component
{

    public $title;
    public $content;


    /**
     * Validation rules.
     */
    public function rules()
    {
        return [
            Post::COL_TITLE => ['required', 'string', 'min:3'],
            Post::COL_CONTENT => ['string'],
        ];
    }


    /**
     * Render function for comonent.
     */
    public function render()
    {
        return view('livewire.post.post-form');
    }


    /**
     * Store a new Post.
     */
    public function store()
    {

        $this->validate();


        Post::create([
            Post::COL_TITLE => $this->title,
            Post::COL_CONTENT => $this->content,
        ]);


        $this->reset();
    }


}
