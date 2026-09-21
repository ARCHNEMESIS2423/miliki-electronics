<?php

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
  //
  public int $id;
  public string $name;
  public string $slug;
  public string $image;
  public float $price;

  public bool $delete_clicked = false;

  public function toggleDelete(): bool
  {
    $this->delete_clicked = !$this->delete_clicked;
    return $this->delete_clicked;
  }

  #[Computed]
  public function mount(int $id, string $name, string $image, float $price, string $slug)
  {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    $this->slug = $slug;
  }

  public function delete_this(): void
  {
    $product = Product::findOrfail($this->id);
    if (Storage::disk('public')->exists($product->image_path)) {
      Storage::disk('public')->delete($product->image_path);
      $product->delete();
      redirect()->route('see_products');
    }
  }

  public function formatPrice() {
    $parts = explode('.', (string)$this->price);// Split the number into integer and decimal parts
    $integerPart = number_format((int)$parts[0]);// Format the integer part with thousands separators
    $decimalPart = isset($parts[1]) ? $parts[1] : '00';// Get the decimal part if it exists, otherwise default to '00'
    return [$integerPart, $decimalPart ];// Combine them with the superscript HTML tags
}
};
?>

<div>
  <div class="rounded-lg overflow-hidden p-0 w-[90%] flex flex-col items-centers bg-gray-700 mx-auto my-2.5">
    <div class="min-w-full min-h-60 *:w-full">
        <img src="{{ asset($this->image) }}" alt="{{ $this->name }}" title="{{ $this->name }}" loading='lazy'/>
    </div>
    <div class="p-2">
      <p class="font-black text-2xl">{{ $this->name }}</p>
      <p class="flex flex-row justify-between">
        <b>
          PRICE:
        </b>
        <b>
          {{ $this->formatPrice()[0]}} <sup>{{$this->formatPrice()[1]}}</sup> TZS
        </b>
      </p>
    </div>
    @auth()
    @if(in_array(Auth::user()->role,['dev','admin'],true))
    <div class="flex flex-row justify-around p-2">
      <a href="{{ route('edit_product',$this->id) }}" class="button bg-green-500">
        EDIT
      </a>
      <button class="button bg-red-500" wire:click='toggleDelete'>
        DELETE
      </button>
      @include('partials.delete_product')
    </div>
    @endif
    @endauth
  </div>
</div>