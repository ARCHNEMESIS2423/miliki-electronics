@php
    $links = [
        ['href' => route('home'), 'title' => 'home page'],
        ['href' => route('add_product'), 'title' => 'Add new product'],
        ['href' => route('see_products'), 'title' => 'view products'],
    ];
@endphp

<aside
    x-cloak
    :class="sidebar ? 'translate-x-0' : '-translate-x-full'"
    x-on:click="sidebar=!sidebar"
    class="fixed md:static top-0 left-0 z-40
            w-full
           h-dvh
           bg-gray-300
           font-black
           transition-transform duration-300 ease-in-out
           md:translate-x-0 p-0"
>
    <button class="md:hidden float-right p-2">
        <img src="{{ asset('displays/icons/close-line-icon.svg') }}" alt="close sidebar" width="30">
    </button>
    <div class="text-center pt-20 pb-4">
        @auth()
             <p class="capitalize">Welcome back, {{ Auth::user()->name }}</p>
        @endauth
    </div>

    <nav class="flex flex-col gap-2 px-2 w-full">
        @foreach ($links as $link)
            <a href="{{ $link['href'] }}"
               wire:navigate
               title="{{ $link['title'] }}"
               class="button w-full">
                {{ $link['title'] }}
            </a>
        @endforeach
        <hr/>
        <livewire:pages::auth.logout />
    </nav>
</aside>