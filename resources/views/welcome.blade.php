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
    <header class="bg-center bg-clip-padding bg-no-repeat min-h-90 w-full"
        style="background-image: url('{{ asset('displays/bg-hero.jpeg') }}');" x-data="{ menu_open: false }">

        <div class="font-extrabold flex flex-row justify-between md:text-3xl text-lg bg-gray-300 p-2.5">
            <h1>
                <span class="text-[#C6A86F]">
                    <img src="{{ asset('favicon.svg') }}" alt="M" width="35"
                        class="inline text-[200%] font- " />ILIKI.
                </span>
            </h1>

            <button x-on:click="menu_open=!menu_open" class="cursor-pointer">
                <img src=" {{ asset('displays/icons/three-horizontal-lines-icon.svg') }}" alt="MENU"
                    width="30" />
            </button>
        </div>
        <div class="border-b border-amber-300 bg-gray-200" x-show="menu_open">
            <nav class="flex flex-col *:hover:bg-gray-300 *:p-1.5 p-2">
                <a href="#">HOME</a>
                <a href="#products">PRODUCTS</a>
                <a href="#">SEARCH</a>
                <a href="#">CONTACT US</a>
                <a href="#">ABOUT US</a>
            </nav>
        </div>
        <livewire:pages::accessory.search />

    </header>

    <div>
        <div>
    <content id="products" class="my-1.5 p-1.5 w-full min-h-14">
        <h2 class="border-b border-cyan-300">PRODUCTS</h2>

        <div class="relative group">
            <!-- Left Toggle -->
            <button
                type="button"
                onclick="document.getElementById('products-scroll').scrollBy({left: -320, behavior: 'smooth'})"
                class="absolute left-1 top-1/2 -translate-y-1/2 z-10 flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-700 shadow-md backdrop-blur transition hover:bg-white hover:text-gray-900 opacity-0 group-hover:opacity-100 focus:opacity-100"
                aria-label="Scroll left"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>

            <!-- Right Toggle -->
            <button
                type="button"
                onclick="document.getElementById('products-scroll').scrollBy({left: 320, behavior: 'smooth'})"
                class="absolute right-1 top-1/2 -translate-y-1/2 z-10 flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-700 shadow-md backdrop-blur transition hover:bg-white hover:text-gray-900 opacity-0 group-hover:opacity-100 focus:opacity-100"
                aria-label="Scroll right"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </button>

            <!-- Scroll Container -->
            <div
                id="products-scroll"
                class="flex flex-row flex-1 gap-2 p-5 overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-none scroll-px-5"
            >
                @for ($i=1; $i<15; $i++)
                    <div class="snap-start shrink-0">
                        <livewire:pages::products.card />
                    </div>
                @endfor
            </div>
        </div>

        <hr class="border-b border-amber-300"/>
    </content>
</div>
    </div>
    
    @livewireScripts
</body>

</html>
