<form wire:submit.prevent="update">

    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <div>
        Title: <input type="text" wire:model.defer="post.title" value="{{$post->title}}" />
    </div>
    <div>
        Content: <input type="text" wire:model.defer="post.content" value="{{$post->content}}" />
    </div>

    <button>Save</button>
</form>
