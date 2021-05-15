<div class="flex flex-col">
@foreach ($lobby as $player)
    <div class="text-4xl">Player {{ $player['name'] }}</div>
    <div id="playerHand" class="flex flex-row space-x-2">
        @for ($i = 1; $i < 10; $i++)
            <div class="flex flex-col justify-between bg-red-100 h-20 w-16">
                <div class="text-left">{{ $i }}</div>
                <div class="flex flex-col items-center justify-center  bg-white rounded-full">
                    <div class="text-center">
                        {{ $i }}
                    </div>
                </div>
                <div class="text-right">{{ $i }}</div>
            </div>
        @endfor
    </div>
@endforeach
<div class="flex flex-col items-center">
    <div class="text-xl">Top card</div>
    <div class="flex flex-col justify-between bg-red-100 h-20 w-16">
        <div class="text-left">{{ 1 }}</div>
        <div class="flex flex-col items-center justify-center  bg-white rounded-full">
            <div class="text-center">
                {{ 1 }}
            </div>
        </div>
        <div class="text-right">{{ 1 }}</div>
    </div>
</div>