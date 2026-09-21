<?php

use App\Http\Middleware\To_homePage;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

new class extends Component
{
  //
  public string $email = '';
  public string $password = '';

  public string $validation_errors = "";
  public function login(Request $request)
  {
    $credentials = $this->validate([
      'email' => "required|email",
      'password' => "required"
    ]);

    if (Auth::attempt($credentials, false)) {
      session()->regenerate();
      $is_admin = new To_homePage();
      $is_admin->handle($request, fn() => redirect('/'));
    } else {
      $this->validation_errors = "credentials do not match our records";
    }
  }
};
?>

<div x-data="{ show: false }" class="py-0">
  <div class="bg-white rounded-2xl p-5 mx-auto w-fit mb-5">
    @include('partials.brand')
  </div>
  <form class="max-w-sm mx-auto p-6 space-y-4" wire:submit='login'>
    <span wire:text='validation_errors'></span>
    <label class="block border-b border-gray-400 focus-within:border-gray-900 ">
      <span class="text-sm text-gray-600">Email</span>
      <input
        type="email"
        name="email"
        class="w-full bg-transparent py-2 outline-none" wire:model='email' required />
    </label>
    {{-- @error('email')
      {{ $message }}
    @enderror --}}
    <flux:error name="email" />

    <label class="block border-b border-gray-400 focus-within:border-gray-900">
      <span class="text-sm text-gray-600">Password</span>
      <div class="flex items-center">
        <input
          :type="show ? 'text' : 'password'"
          name="password"
          class="w-full bg-transparent py-2 outline-none" wire:model='password' required />
        <button type="button" x-on:click="show = !show" class="pl-2 text-lg cursor-pointer">
          <span x-text="show ? '🔒' : '👁️'"></span>
        </button>
      </div>
    </label>
    @error('password')
    {{ $message }}
    @enderror

    <flux:button type="submit" class="w-full border border-gray-400 py-2 hover:bg-gray-100">
      Login
    </flux:button>
    <div>
      <span>Don't have an account? </span>
      <a wire:navigate href="{{ route('register') }}" class="font-bold cursor-pointer">Sign up</a>
    </div>

  </form>
</div>