<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class LobbyForm extends Component
{
    #[Validate('exists:lobbies,code')]
    public string $lobby = '';

    public function join()
    {
        $this->validate();
        //attach user to lobby and store in session

        return $this->redirect(route('get.game.lobby', ['lobby' => $this->lobby]));
    }

    public function render()
    {
        return view('livewire.lobby-form');
    }
}
