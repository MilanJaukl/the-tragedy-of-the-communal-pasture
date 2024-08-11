<?php

namespace App\Livewire;

use App\Models\Lobby;
use Livewire\Component;

class LobbyRoom extends Component
{
    public $lobby;

    public function mount(Lobby $lobby)
    {
        $this->lobby = $lobby;
    }
    public function render()
    {
        return view('livewire.lobby-room');
    }
}
