<div class="w-screen overflow-hidden transition-h duration-300 ease-in-out bg-gray-500 fixed" :class="menu?'h-screen':'h-0'" x-cloak x-on:click="menu=false">
    @php
        $links = [
            ['href'=>route('home'),'alt'=>"home page"],
            ['href'=>route('dashboard'),'alt'=>"dashboard"],
        ]
    @endphp
    <button x-on:click="menu=false" title="close menu button" class="float-right p-4">
        <img src="{{ asset('displays/icons/close-line-icon.svg') }}" width="40" alt="close menu icon">
    </button>
    <nav class="text-white font-black m-2 p-2 *:mb-2 mt-20 w-fit flex flex-col gap-2 text-2xl">
        @foreach ($links as $link)
            <a href="{{ $link['href'] }}" wire:navigate>{{$link['alt']}}</a>
        @endforeach
    </nav>
    <hr/>
    <div class="flex flex-col items-baseline gap-3 mt-5">
        @guest()
            <div class="mb-2 flex flex-row w-[50%] justify-around">
                <a href="{{ route('login') }}" class="bg-blue-400 button" title="sign in" wire:navigate>Sign in</a>
            
                <a href="{{ route('register') }}" class="bg-gray-400 button" title="sign up" wire:navigate>Sign up</a>
            </div>
        @endguest
        <div class="p-5"
            @auth()
                {{ Auth::user()->role }}
                <livewire:pages::auth.logout />
            @endauth 
        </div>
    </div>
</div>