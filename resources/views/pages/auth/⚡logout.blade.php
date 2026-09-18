<?php


use Illuminate\Support\Facades\Auth;
use Livewire\Component;

new class extends Component
{
    //
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();


        return redirect('/');
    }
};
?>

<div>
    <form method="POST" wire:submit='logout'>
        @csrf

        <flux:button type="submit" variant="danger" class="font-bold text-white">
            Logout
        </flux:button>
    </form>
</div>