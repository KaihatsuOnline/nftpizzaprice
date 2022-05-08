<div>
    <input wire:model="search" type="search" placeholder="Type to search..." >
    
    <h1>Search Results:</h1>

    <ul>
        @foreach ($posts as $post)
            <li>{{$post->title}}: {{$post->content}}</li>
        @endforeach
    </ul>
</div>
