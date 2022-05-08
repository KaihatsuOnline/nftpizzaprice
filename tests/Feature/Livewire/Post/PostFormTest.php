<?php

namespace Tests\Feature\Livewire\Post;

use App\Http\Livewire\Post\PostForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PostFormTest extends TestCase
{
    

    /** @test */
    public function test_tite_and_content_fields_are_required_for_saving_a_post()
    {

        Livewire::test('post.post-form')
        ->set('title', 'null')
        ->set('content', '')
        ->assertHasErrors([
            'title',
            'content' => 'required',
        ]);
    }

}
