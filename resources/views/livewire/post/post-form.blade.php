<form wire:submit.prevent="store">
    <input type="text" wire:model.defer="title">
    @error('title') <span class="error">{{ $message }}</span> @enderror
 
    <input type="text" wire:model.defer="content">
    @error('content') <span class="error">{{ $message }}</span> @enderror
 
    <button type="submit">Save Post</button>
</form>
