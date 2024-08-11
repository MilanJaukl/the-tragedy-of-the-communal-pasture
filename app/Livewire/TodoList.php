<?php

namespace App\Livewire;

use Livewire\Component;

class TodoList extends Component
{
    public $todos = [
        'Buy milk',
        'Go to the gym',
        'Learn Laravel'
    ];

    public $input = '';

    public function addTodo()
    {
        $this->todos[] = $this->input;
        $this->input = '';
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
