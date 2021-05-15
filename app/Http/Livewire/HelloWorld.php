<?php

namespace App\Http\Livewire;

use App\Events\CardPlayed;
use Livewire\Component;

class HelloWorld extends Component
{
    public $name = "jens";

    public $showNewOrderNotification = false;

    // Special Syntax: ['echo:{channel},{event}' => '{method}']
    protected $listeners = ['echo:game,.CardPlayed' => 'notifyNewOrder'];

    public function notifyNewOrder()
    {
        $this->name = "new";
    }

    public function buttonClick()
    {
        $this->name = "button";
    }

    public function newEvent()
    {
        event(new CardPlayed);
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
