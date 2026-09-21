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
<body class="flex flex-col font-['Manrope'] scroll-smooth">
    <header class="flex flex-col fixed w-screen bg-accent-foreground/70"  x-data="{menu:false}">
        <div class="flex flex-row justify-between p-4 border-b border-cyan-200 items-center">
            @include('partials.brand')
            
                <button x-on:click="menu=true" class="self-center">
                    <img src="{{ asset('displays/icons/three-horizontal-lines-hamenu.svg') }}" alt="menu" title="menu" width="40"/>
                </button>  
           
         </div>
        @include('partials.menu') 
    </header>
    <div class="overflow-auto h-fit mt-12">
        <main class="pt-10 pb-10 max-w-screen">
           <livewire:pages::products.view classes="w-full"/>
        </main>
        <footer class="bg-slate-900 text-white">
        <!-- Main Footer Content -->
        <div class="mx-auto max-w-7xl px-6 py-16 grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-4">

            <!-- Brand & Newsletter -->
            <div class="space-y-4">
             @include('partials.brand')
            <p class="text-sm text-gray-300 leading-relaxed">
                Timeless pieces, thoughtfully crafted. Join our list for early access to new drops and exclusive offers.
            </p>
            <form class="flex overflow-hidden rounded-md border border-cyan-200/40">
                <input type="email" placeholder="Your email address"
                class="w-full bg-transparent px-4 py-2 text-sm text-white placeholder-gray-400 focus:outline-none" />
                <button type="submit"
                class="bg-amber-400 px-4 py-2 text-sm font-semibold text-slate-900 hover:bg-amber-300 transition">
                Join
                </button>
            </form>
            <div class="flex gap-3 pt-2">
                <a href="#" aria-label="Instagram" class="grid h-9 w-9 place-items-center rounded-full border border-cyan-200/40 text-cyan-200 hover:bg-cyan-200 hover:text-slate-900 transition">IG</a>
                <a href="#" aria-label="Facebook" class="grid h-9 w-9 place-items-center rounded-full border border-cyan-200/40 text-cyan-200 hover:bg-cyan-200 hover:text-slate-900 transition">FB</a>
                <a href="#" aria-label="X" class="grid h-9 w-9 place-items-center rounded-full border border-cyan-200/40 text-cyan-200 hover:bg-cyan-200 hover:text-slate-900 transition">X</a>
                <a href="#" aria-label="TikTok" class="grid h-9 w-9 place-items-center rounded-full border border-cyan-200/40 text-cyan-200 hover:bg-cyan-200 hover:text-slate-900 transition">TT</a>
            </div>
            </div>

            <!-- Shop -->
            <div>
            <h3 class="mb-4 text-sm font-semibold uppercase tracking-widest text-amber-400">Shop</h3>
            <ul class="space-y-3 text-sm text-gray-300">
                <li><a href="#" class="hover:text-cyan-200 transition">New Arrivals</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">Best Sellers</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">Men</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">Women</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">Sale</a></li>
            </ul>
            </div>

            <!-- Help -->
            <div>
            <h3 class="mb-4 text-sm font-semibold uppercase tracking-widest text-amber-400">Help</h3>
            <ul class="space-y-3 text-sm text-gray-300">
                <li><a href="#" class="hover:text-cyan-200 transition">Contact Us</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">Shipping & Delivery</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">Returns & Exchanges</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">Order Tracking</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">FAQ</a></li>
            </ul>
            </div>

            <!-- Company -->
            <div>
            <h3 class="mb-4 text-sm font-semibold uppercase tracking-widest text-amber-400">Company</h3>
            <ul class="space-y-3 text-sm text-gray-300">
                <li><a href="#" class="hover:text-cyan-200 transition">About Us</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">Careers</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">Sustainability</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">Privacy Policy</a></li>
                <li><a href="#" class="hover:text-cyan-200 transition">Terms of Service</a></li>
            </ul>
            </div>
        </div>

            <!-- Bottom Bar -->
            <div class="border-t border-cyan-200/20">
                <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-6 py-6 text-xs text-gray-400 md:flex-row">
                <p>© 2025 MILIKI. All rights reserved.</p>
                <div class="flex items-center gap-4">
                    <span class="text-cyan-200">Secure payments</span>
                    <span class="h-4 w-px bg-cyan-200/30"></span>
                    <span>M-Pesa</span>
                    <span>Airtel Money</span>
                    <span>Mixx by Yas</span>
                    <span>VISA | Mastercard</span>
                    <span>PayPal</span>
                </div>
                </div>
            </div>
        </footer>
    </div>
    
    @livewireScripts
</body>

</html>
