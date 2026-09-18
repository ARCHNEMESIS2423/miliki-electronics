<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

new class extends Component
{
  //
  public string $name;
  public string $email;
  public string $password;
  public string $password_confirmation;
  public bool $remember;
  public string $registration_error;

  public function register()
  {
    $credentials = $this->validate([
      'name' => 'string|required',
      'email' => 'email|required|unique:users,email',
      'password' => 'confirmed|required'
    ]);

    $user = User::create($credentials);
    session()->regenerateToken();
    Auth::login($user);
    redirect('/');
  }
};
?>

<div x-data="{ show: false, showConfirm: false }">
  <form method="POST" class="max-w-sm mx-auto p-6 space-y-4" wire:submit='register'>
    @csrf
    <span wire:model='registration_error'></span>
    <label class="block border-b border-gray-400 focus-within:border-gray-900">
      <span class="text-sm text-gray-600">Name</span>
      <input type="text" name="name" class="w-full bg-transparent py-2 outline-none" autofocus required wire:model='name' />
    </label>
    @error('name') <small class="error">{{ $message }}</small> @enderror

    <label class="block border-b border-gray-400 focus-within:border-gray-900">
      <span class="text-sm text-gray-600">Email</span>
      <input type="email" name="email" class="w-full bg-transparent py-2 outline-none" required wire:model='email' />
    </label>
    @error('email') <small class="error">{{ $message }}</small> @enderror

    <label class="block border-b border-gray-400 focus-within:border-gray-900">
      <span class="text-sm text-gray-600">Password</span>
      <div class="flex items-center">
        <input :type="show ? 'text' : 'password'" name="password" class="w-full bg-transparent py-2 outline-none" required wire:model='password' />
        <button type="button" @click="show = !show" class="pl-2 text-lg">
          <span x-text="show ? '🔒️' : '👁️'"></span>
        </button>
      </div>
    </label>
    @error('password') <small class="error">{{ $message }}</small> @enderror

    <label class="block border-b border-gray-400 focus-within:border-gray-900">
      <span class="text-sm text-gray-600">Confirm Password</span>
      <div class="flex items-center">
        <input :type="showConfirm ? 'text' : 'password'" name="password_confirmation" class="w-full bg-transparent py-2 outline-none" required wire:model='password_confirmation' />
        <button type="button" @click="showConfirm = !showConfirm" class="pl-2 text-lg">
          <span x-text="showConfirm ? '🔒️' : '👁️'"></span>
        </button>
      </div>
    </label>
    @error('password_confirmation') <small class="error">{{ $message }}</small> @enderror

    <label class="flex items-center gap-2 text-sm text-gray-600">
      <input type="checkbox" name="remember" class="accent-gray-900" wire:model='remember' />
      Remember me
    </label>

    <flux:button type="submit" variant="filled" class="w-full">
      Register
    </flux:button>
    <div>
      <span>Already have an account?</span>
      <flux:link href="{{ route('login') }}" wire:navigate title="sign in"><b class="font-bold">Sign in</b></flux:link>
    </div>
  </form>
</div>