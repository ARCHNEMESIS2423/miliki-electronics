<?php

use Livewire\Component;

new class extends Component
{
    //
    public string $product = "A";
};
?>

<div>
    <div class="w-full  overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm">
  <!-- Image Area -->
  <div class="relative aspect-[4/3] w-90 bg-gray-100">
    <div class="flex h-full w-full items-center justify-center text-sm font-medium tracking-widest text-gray-400">
      PRODUCT<br />IMAGE
    </div>
    <button
      type="button"
      class="absolute right-3 bottom-3 flex h-9 w-9 items-center justify-center rounded-full bg-white/90 text-gray-500 shadow-sm backdrop-blur transition hover:text-red-500"
      aria-label="Add to wishlist"
    >
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
      </svg>
    </button>
  </div>

  <!-- Details Area -->
  <div class="flex flex-col gap-1 p-5">
    <span class="text-xs font-semibold uppercase tracking-wider text-gray-500">Lenovo</span>
    <h3 class="text-base font-semibold leading-snug text-gray-900">ThinkPad X1 Carbon Gen 12</h3>
    <p class="text-sm text-gray-500">Core Ultra 7 · 16GB · 512GB</p>

    <div class="mt-3 flex flex-col gap-1">
      <span class="text-lg font-bold text-gray-900">TZS 3,450,000</span>
      <span class="text-xs font-medium text-green-600">In stock</span>
    </div>

    <button
      type="button"
      class="mt-4 w-full rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-gray-800 active:scale-[0.98]"
    >
      Add to Cart
    </button>
  </div>
</div>
</div>