<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    @auth()
    <h3>WELCOME {{ Auth::user()->name }} YOU ARE AN {{ Auth::user()->role }}</h3>
    @endauth

    @guest()
        <h1>
            HELLO VISITOR YOU ARE IN A WRONG SIDE 
        </h1>
    @endguest
</div>