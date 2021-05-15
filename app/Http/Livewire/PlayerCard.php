<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class PlayerCard extends Component
{

    public $lobby = [];


    // Special Syntax: ['echo:{channel},{event}' => '{method}']
    protected $listeners = [
        // 'echo:game,.CardPlayed' => 'notifyNewOrder',
        'echo:startGame,.StartGame' => 'fillUpLobby',
        'echo:lobby,.PlayerJoined' => 'playerJoined',
        // 'startGame' => 'fillUpLobby'
    ];


    public function fillUpLobby($data)
    {
        dd($data);
        $this->lobby = $data['lobby'];
    }

    public function playerJoined($data)
    {
        $user = User::find($data['userId']);
        $this->lobby[$user->id] = $user; 
    }

    public function render()
    {
        return view('livewire.player-card');
    }
}
