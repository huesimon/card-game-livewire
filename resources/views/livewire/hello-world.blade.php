<div>
    <input wire:model="name" type="text">
    hello {{ $name }}
    @foreach ($lobby as $player)
        {{ $player['name'] }}

        {{-- {{ json_encode($player) }} --}}
    @endforeach
</div>
