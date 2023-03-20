<div>
    <h1>Comments</h1>
    <div class="">
        <input type="text" wire:model="newComment">
        <button wire:click="addComment">Add</button>
    </div>
    {{ $newComment }}
    @foreach ($comments as $comment)
        <div style=" border: 1px solid grey; padding: 5px; max-width:500px;">
            <div style="display:flex; ">
                <p style="font-weight:bold; margin-right: 10px;">{{ $comment['creator'] }}</p>
                <p>{{ $comment['created_at'] }}</p>
            </div>

            <div>
                <p>{{ $comment['body'] }}</p>
            </div>
        </div>
    @endforeach

</div>
