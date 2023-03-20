<div>
    <h1>Comments</h1>
    <div class="">
        <form wire:submit.prevent="addComment()">
            <input type="text" wire:model.lazy="newComment">
            <button type="submit">Add</button>
        </form>
    </div>
    {{ $newComment }}
    @foreach ($comments as $comment)
        <div style=" border: 1px solid grey; padding: 5px; max-width:500px;">
            <div style="display:flex; flex-wrap:wrap;">
                <p style="font-weight:bold; margin-right: 10px;">{{ $comment['creator'] }}</p>
                <p>{{ $comment['created_at'] }}</p>
            </div>

            <div>
                <p>{{ $comment['body'] }}</p>
            </div>
        </div>
    @endforeach

</div>
