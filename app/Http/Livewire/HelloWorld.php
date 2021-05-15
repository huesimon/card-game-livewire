<?php

namespace App\Http\Livewire;

use App\Events\CardPlayed;
use App\Events\PlayerJoined;
use App\Events\StartGame;
use App\Models\User;
use Illuminate\Support\Arr;
use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "jens";

    public $players = "players";

    public $lobby = [];

    public $showNewOrderNotification = false;

    // Special Syntax: ['echo:{channel},{event}' => '{method}']
    protected $listeners = [
        'echo:game,.CardPlayed' => 'notifyNewOrder',
        'echo:startGame,.StartGame' => 'fillUpLobby',
        'echo:lobby,.PlayerJoined' => 'playerJoined',
    ];

    public function notifyNewOrder()
    {
        $this->name = "new";
    }

    public function buttonClick()
    {
        dd($this->lobby);
        $this->name = "button";
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
