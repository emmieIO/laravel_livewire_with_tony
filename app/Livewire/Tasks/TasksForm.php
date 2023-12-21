<?php

namespace App\Livewire\Tasks;


use Livewire\Component;
use App\Livewire\Forms\TaskForm;

class TasksForm extends Component
{
    public TaskForm $form;

    public function save()
    {
        $this->validate();
        $this->form->createTask();
        $this->dispatch('task-created');
        $this->form->reset();
        session()->flash('message', 'Task created');
    }

    public function render()
    {
        return view('livewire.tasks.tasks-form');
    }
}
