<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowPosts extends Component
{

    public $extraText;
    public $mainText;
    public $users;

    public function mount()
    {
        $this->extraText = 'Just check this now!!';
        $this->users = User::all();
    }


    // public function render()
    // {
    //     return view('livewire.show-posts');
    // }
}
