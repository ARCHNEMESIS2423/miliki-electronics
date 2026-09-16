<?php

use Livewire\Component;

new class extends Component
{
    //
    public string $greet = '';

    public function change(){
        $this->greet = $greet;
    }
    public function save(){
        $this->greet = 'hello';
    }
};
?>

<div class="bg-red-400" x-data="{greet:''}">
    <form wire:submit='save'>
        <label class="border-b border-cyan-100 focus-within:border-cyan-400">
            <span>GREETINGS:</span>
            <input name="greet" placeholder="greetings" class="p-3 outline-none" wire:model='greet' x-model="greet" />
            <flux:button icon="x-mark" variant="subtle" x-on:click="greet=''"/>
        </label>
        
        <button>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>
        </button>
    </form>
</div>