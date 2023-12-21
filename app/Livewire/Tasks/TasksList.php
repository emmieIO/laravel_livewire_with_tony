<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class TasksList extends Component
{
    use WithPagination;

   #[On("task-created")]
    public function render()
    {
        return view('livewire.tasks.tasks-list', [
            "tasks" => auth()->user()->tasks()->paginate(6)
        ]);
    }
}
