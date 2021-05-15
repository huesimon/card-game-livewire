<?php

namespace App\Http\Livewire;

use App\Events\CardPlayed;
use App\Events\PlayerJoined;
use App\Events\StartGame;
use App\Models\User;
use Livewire\Component;

class GameButtons extends Component
{

    public $name = "jens";

    public $players = "players";


    public $showNewOrderNotification = false;

    protected $listeners = [
        'echo:game,.CardPlayed' => 'notifyNewOrder',
        // 'echo:startGame,.StartGame' => 'fillUpLobby',
        // 'echo:lobby,.PlayerJoined' => 'playerJoined',
    ];


    public function newEvent()
    {
        event(new CardPlayed);
    }

    public function joinLobby()
    {
        event(new PlayerJoined(auth()->user()->id));
    }

    public function startGame()
    {
        $this->emit('startGame');
    }

    
    public function render()
    {
        return view('livewire.game-buttons');
    }
}
