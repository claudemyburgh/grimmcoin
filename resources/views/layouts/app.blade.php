<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ isset($title) ? $title . ' | Grimm Coin' : 'Grimm Coin' }}</title>


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=bangers:400|open-sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
        rel="stylesheet"/>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
</head>
<body
    class="bg-black bg-gradient-to-b from-[#050708] via-gray-900 overflow-x-clip to-[#050708] text-white h-full selection:bg-primary-500/20 flex flex-col">
<x-navigation/>

<main id="main">
    {{ $slot }}
</main>


<x-footer/>

@livewireScriptConfig
@stack('scripts')
</body>
</html>
