<?php

namespace App\Http\Livewire\Post;

use App\Models\Post\Post;
use Livewire\Component;

class PostForm extends Component
{

    public $title;
    public $content;


    // protected $rules = [
    //     Post::COL_TITLE => ['required', 'string', 'min:3'],
    //     Post::COL_CONTENT => ['string'],
    // ];


    /**
     * Validation rules.
     */
    public function rules()
    {
        return [
            Post::COL_TITLE => ['required', 'string', 'min:3'],
            Post::COL_CONTENT => ['required', 'string'],
        ];
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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

        $validatedData = $this->validate();


        // Post::create([
        //     Post::COL_TITLE => $this->title,
        //     Post::COL_CONTENT => $this->content,
        // ]);

        Post::create($validatedData);


        $this->reset();
    }


}
