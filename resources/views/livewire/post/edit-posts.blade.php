<div>
       
    <h1>Posts:</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                @livewire('post.update-post', ['post' => $post], key($post->id))
            </li>
        @endforeach
    </ul>
</div>