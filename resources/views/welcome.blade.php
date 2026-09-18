<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Welcome') }} - {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
    @fonts
    @livewireStyles
    {{-- @fluxAppearance --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->

</head>
<body class="flex flex-col font-['Manrope']">
    <header class="flex flex-row justify-between p-4 border-b border-cyan-200">
        <div class="flex flex-row text-[#C6A86F] text-3xl font-bold" title="miliki electronics">
            <img src="{{ asset('/favicon.ico') }}" alt="𝓜" width="40"/><span>ILIKI</span>
        </div>
        <div class="flex flex-row items-baseline gap-3">
            @guest()
                <div class="mb-2">
                    <a href="{{ route('login') }}" class="bg-blue-400 button" title="sign in">Sign in</a>
                   
                    <a href="{{ route('register') }}" class="bg-gray-400 button" title="sign up">Sign up</a>
                </div>
            @endguest
            @auth()
                HELLO AM I LOGGED IN AS AN {{ Auth::user()->role }}
                <livewire:pages::auth.logout />
            @endauth   
            <img src="{{ asset('displays/icons/three-horizontal-lines-hamenu.svg') }}" alt="menu" title="menu" width="40" class="block"/>
        </div>
    </header>
    
    @livewireScripts
</body>

</html>
