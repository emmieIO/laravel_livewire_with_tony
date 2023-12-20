<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <h1 class="">Tasks</h1>
    <form wire:submit="addTask" class="my-3"> 
    <input type="text" wire:model="task">
 
    <button type="submit" class="bg-indigo-500 px-5 py-2  ">Save</button>
</form>
    <ul>

        @foreach ($tasks as $task)
           <li>{{$task}}</li>
        @endforeach
    </ul>

</div>
