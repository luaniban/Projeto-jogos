<div>
    @if($modal)
    <div>
        <x-modaal>
           <x-input wire:model="name"/>
           <x-input wire:model="description"/>
           <x-buttonn :click="'save'">Salvar</x-buttonn>
        </x-modaal>
    </div>
    @endif
</div>
