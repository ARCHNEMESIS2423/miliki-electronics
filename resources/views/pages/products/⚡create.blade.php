<?php

use Livewire\Component;

new class extends Component {
    public string $pop;
    //
    public function boot(){
        if(Auth::user()->role == 'admin' || Auth::user()->role == 'dev'){
            $this->pop = "Hello visitor, some mistake happened and now you are here";
        }
    }
};
?>

<div class="text-3xl text-center">
    <p>ADMIN CAN CREATE A PRODUCT</p>
    <hr/>
    <p>Hello {{Auth::user()->name}} tell dev to create a product so you {{ Auth::user()->role}} can create a product</p>
</div>
