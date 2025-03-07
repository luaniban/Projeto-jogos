<div>
    @if($modal)
    <div>
        <x-modaal>
           <x-input wire:model="name"/>
           <x-input wire:model="description"/>
        </x-modaal>
    </div>
    @endif
</div>
