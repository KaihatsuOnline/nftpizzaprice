<div>
    Ehhmm  yeah.
    <div>
        {{ $extraText }}
    </div>

    <div>

        <input wire:model.debounce.500ms="mainText" type="text">

        <h5>{{ $mainText }}</h5>
    </div>


    <div>
        <h3>Lets Add some Post</h3>
        @livewire('post.post-form')
    </div>


    @foreach ($users as $user)
        @include('components.user.user', ['user' => $user])
    @endforeach

    So is it working???
</div>
