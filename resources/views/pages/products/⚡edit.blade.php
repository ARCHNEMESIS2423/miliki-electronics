<?php

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component
{
    use Livewire\WithFileUploads;

    #[Validate('string|required|max:255')]
    public string $name = '';
    #[Validate('numeric|min:1000.0|max:9999999.999')]
    public float $price = 0.0;

    public Product $product;
    public $image = null;
    public $newImage = null;
    public string $imageUrl = '';
    public string $slug = '';


    public function mount(Product $product)
    {
        $this->name = $product->name;
        $this->price = $product->price;
        $this->image = $product->image_path;
        $this->imageUrl = Storage::disk('public')->url($product->image_path);
        $this->slug = $product->slug;
    }

    public function update()
    {
        $validated = $this->validate();

        $unique_slug = $this->slug; //if (name is the same) then {slug is the same}, keep it;
        if ($this->product->isDirty('name')) {
            // if (name is updated) then {update the slug} 
            $unique_slug = Str::slug($validated['name']) . "-" . Str::random(10);
        }
        $this->product->name = $validated['name'];
        $this->product->price = $validated['price'];
        $this->slug = $unique_slug;

        $this->product->save();
    }

    public function change_image()
    {
        $this->validate([
            'newImage' => 'required|image|max:2048',
        ]);

        $extension = $this->newImage->extension();
        $filename  = Str::slug($this->name) . '-' . Str::random(10) . '.' . $extension;

        // 1. Store the new file first
        $newPath = $this->newImage->storeAs('product_images', $filename, 'public');

        // 2. Remember the old path
        $oldPath = $this->product->image_path;

        // 3. Update the DB
        $this->product->update(['image_path' => $newPath]);

        // 4. Delete the old file (skip if same path or empty)
        if ($oldPath && $oldPath !== $newPath) {
            Storage::disk('public')->delete($oldPath);
        }

        // 5. Clear the upload so the preview shows the stored image
        $this->reset('newImage');

        session()->flash('message', 'Image updated.');
    }
};
?>

<div class="pt-30 overflow-auto h-dvh">
    <form wire:submit="update" class="max-w-sm mx-auto p-6 space-y-4 *:focus-within:border-gray-900 *:border-gray-400 bg-accent">
        <label class="block border-b">
            <span class="text-sm text-gray-600">Name</span>
            <input type="text" wire:model="name" class="w-full bg-transparent py-2 outline-none" />
        </label>
        @error('name')
        <span class="error">{{ $message }}</span>
        @enderror

        <label class="block border-b">
            <span class="text-sm text-gray-600">Price</span>
            <input type="number" step="0.01" wire:model="price" class="w-full bg-transparent py-2 outline-none" />
        </label>
        @error('price')
        <span class="error">{{ $message }}</span>
        @enderror

        <flux:select label="Country" placeholder="Choose a country...">
            <flux:select.option value="us">United States</flux:select.option>
            <flux:select.option value="ca">Canada</flux:select.option>
            <flux:select.option value="mx">Mexico</flux:select.option>
        </flux:select>

        <flux:select  wire:model="visibility" label="Visibility">
            <flux:select.option value="public" label="Public" icon="globe-alt" description="Visible on your profile and public feeds." />
            <flux:select.option value="private" label="Private" icon="lock-closed" description="Only visible to you and invited members." />
        </flux:select>


        <flux:button type="submit" variant="primary" class="w-full">
            Save
        </flux:button>
    </form>
    <form wire:submit='change_image' class="w-[70%] mx-auto rounded-2xl my-5">
        <h1>REPLACE PRODUCT MAIN IMAGE</h1>
        @if ($newImage)
            <img src="{{ $newImage->temporaryUrl() }}" />
        @elseif ($product->image_path)
            <img src="{{ Storage::disk('public')->url($product->image_path) }}" />
        @endif



        <label class="block border-b">
            <span class="text-sm text-gray-600">Image</span>
            <input type="file" wire:model="newImage" class="w-full bg-transparent py-2 outline-none" />
        </label>
        @error('image')
        <span class="error">{{ $message }}</span>
        @enderror

        <flux:button type="submit" variant="primary" class="w-full">
            Save
        </flux:button>
    </form>
</div>