<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="h-dvh overflow-hidden" x-data="{ sidebar: false,menu:false }">
    <div class="flex gap-0 overflow-hidden">

        {{-- Sidebar --}}
        @persist('sidebar')
            @auth
                @if (in_array(Auth::user()->role,['dev','admin'],true))
                    @include('partials.sidebar')
                @endif
            @endauth
        @endpersist

        {{-- Main content --}}
        <div class="flex-1 md:ml-0 dark:bg-accent bg-gray-400 dark:text-accent-foreground p-0 overflow-hidden">
            @auth
            @persist('header')
            <header class="bg-accent p-2 fixed top-0 w-screen max-h-15 min-h-12">
                @if(in_array(Auth::user()->role,['dev','admin'],true))
                    <button
                        class="md:hidden z-40 p-2 bg-white rounded shadow"
                        @click="sidebar = !sidebar"
                        aria-label="Open menu"
                    >
                        <img src="{{ asset('displays/icons/three-horizontal-lines-icon.svg') }}"
                            alt="" width="32" height="32">
                    </button>
                @else
                    <button x-on:click="menu=true" class="float-right w-fit">
                        <img src="{{ asset('displays/icons/three-horizontal-lines-hamenu.svg') }}" alt="menu" title="menu" width="40"/>
                    </button>
                @endif     
            </header>
            @endpersist
            @endauth
            <main class="p-5 pt-25 h-dvh overflow-auto">
                {{ $slot }}
            </main>
        </div>
        @include('partials.menu')
    </div>
    @livewireScripts
</body>
</html>