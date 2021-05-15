<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @livewireStyles
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<body class="antialiased">

    <div class="flex flex-row justify-between">
        <div class="w-64">Left Menu</div>
        
            <livewire:player-card>
            <div class="text-4xl">Your cards</div>
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
        </div>
        <div class="w-64">Right Menu</div>
    </div>

    <livewire:game-buttons>
    @livewireScripts
</body>

</html>
