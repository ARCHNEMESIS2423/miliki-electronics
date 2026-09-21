<?php

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

use function Pest\Laravel\options;

new class extends Component {
    use WithFileUploads;
    //
    #[Validate('string|required|max:255')]
    public string $name;

    #[Validate('numeric|min:1000.0|max:9999999.999')]
    public float $price;

    #[Validate('image|max:1024')]
    public $image = null;

    public function save()
    {
        $validated = $this->validate();
        $mime = $this->image->getClientOriginalExtension();

        $unique_slug = Str::slug($validated['name']) . "-" . Str::random(10);
        $unique_path_name = $unique_slug . "." . $mime; //ie realme_note_50-bxw221nmsx.mpeg

        $path = $this->image->storeAs('product_images', $unique_path_name, 'public');

        Product::create([
            'name' => $validated['name'],
            'slug' => $unique_slug,
            'image_path' => $path,
            'price' => $validated['price']
        ]);
        $this->reset('name', 'price', 'image');

        session()->flash('message', 'Product saved.');
    }
};
?>

<div class="pt-10">
    <form wire:submit="save" class="max-w-sm mx-auto p-6 space-y-4 *:focus-within:border-gray-900 *:border-gray-400 bg-accent rounded-2xl">
        <label class="block border-b">
            <span class="text-sm text-gray-600">Name</span>
            <input type="text" wire:model="name" class="w-full bg-transparent py-2 outline-none" />
        </label>
        @error('name')
        <span class="errors">{{ $message }}</span>
        @enderror

        <label class="block border-b">
            <span class="text-sm text-gray-600">Image</span>
            <input type="file" wire:model="image" class="w-full bg-transparent py-2 outline-none" />
        </label>
        @error('image')
        <span class="errors">{{ $message }}</span>
        @enderror

        <label class="block border-b">
            <span class="text-sm text-gray-600">Price</span>
            <input type="number" step="0.01" wire:model="price" class="w-full bg-transparent py-2 outline-none" />
        </label>
        @error('price')
        <span class="errors">{{ $message }}</span>
        @enderror

        <flux:select label="Country" placeholder="Choose a country...">
            <flux:select.option value="us">United States</flux:select.option>
            <flux:select.option value="ca">Canada</flux:select.option>
            <flux:select.option value="mx">Mexico</flux:select.option>
        </flux:select>

        <flux:button type="submit" variant="primary" class="w-full">
            Save
        </flux:button>
    </form>
</div>