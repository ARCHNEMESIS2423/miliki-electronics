<?php

use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    //
    public $products;
    #[Computed(true)]

    public string $classes;
    public function boot()
    {
        $this->products = Product::all();
    }

    public function mount(string $classes = "overflow-auto")
    {
        $this->classes = $classes;
    }
};
?>

<div class="{{ $this->classes }}">
    @if (count($this->products) < 1)
        <b class="text-2xl text-center pt-30">NO PRODUCTS ADDED YET</b>
        @endif
        @foreach ($this->products as $product)
        <livewire:pages::products.card
            id="{{ $product['id'] }}"
            name="{{ $product['name'] }}"
            slug="{{ $product['slug'] }}"
            image="{{ Storage::url($product['image_path']) }}"
            price="{{ $product['price'] }}" />
        @endforeach
</div>