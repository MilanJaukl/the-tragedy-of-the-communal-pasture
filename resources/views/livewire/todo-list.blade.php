<div>
    <input type="text" wire:model="input"><button wire:click="addTodo">Add</button>

    <ul>
        @foreach($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
