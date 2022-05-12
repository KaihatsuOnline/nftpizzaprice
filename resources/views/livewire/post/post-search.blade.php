<div>

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <br />
    <br />

    <input wire:model="search" type="search" placeholder="Type to search..." >
    
    <h1>Search Results:</h1>

    <ul>
        @foreach ($posts as $post)
            <li>{{$post->title}}: {{$post->content}}</li>
        @endforeach

        {{ $posts->links() }}
    </ul>
</div>
