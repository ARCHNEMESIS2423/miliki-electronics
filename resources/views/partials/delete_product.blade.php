<div id="backdrop" class="bg-black/30 fixed w-screen h-screen top-0 left-0 z-10 flex items-center justify-center" wire:click='toggleDelete' wire:show='delete_clicked' x-cloak>
<flux:card class="space-y-6 fixed left-auto right-auto top-auto bottom-auto z-30" wire:show='delete_clicked'>
            <div class="flex">
                <div class="flex-1">
                    <flux:heading size="lg">Are you sure?</flux:heading>
                    <flux:text class="mt-2">
                        deleting {{ $this->name }} permanently.<br>
                        This action cannot be undone.
                    </flux:text>
                </div>

                <div class="-mx-2 -mt-2">
                    <flux:button variant="ghost" size="sm" icon="x-mark" inset="top right bottom" wire:click='toggleDelete'/>
                </div>
            </div>

            <div class="flex gap-4">
                <flux:spacer />
                <flux:button variant="ghost" wire:click='toggleDelete'>Undo</flux:button>
                <flux:button variant="danger" wire:click='delete_this'>Delete</flux:button>
            </div>
</flux:card>
</div>