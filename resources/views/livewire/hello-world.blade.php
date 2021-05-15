    <div>
    <input wire:model="name" type="text">
    hello {{ $name }}
    <button wire:click='newEvent'>NewEvent</button>
    <button wire:click='buttonClick'>buttonClick</button>
    @if ($showNewOrderNotification)
        YES
    @endif
</div>
