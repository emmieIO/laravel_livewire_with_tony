<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\On;
use Livewire\Component;

class TasksList extends Component
{
   #[On("task-created")]
    public function render()
    {
        return view('livewire.tasks.tasks-list', [
            "tasks" => auth()->user()->tasks
        ]);
    }
}
