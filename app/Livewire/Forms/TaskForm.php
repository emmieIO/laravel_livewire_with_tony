<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{
    #[Validate("required|min:6")]
    public $title;
    #[Validate("required")]
    public $slug;
    #[Validate("required|min:20")]
    public $description;
    #[Validate("required|")]
    public $status;
    #[Validate("required")]
    public $priority;
    #[Validate("required|date")]
    public $deadline;

    public function createTask(){
        auth()->user()->tasks()->create($this->all());
    }
}
