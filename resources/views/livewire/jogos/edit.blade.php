<div>
    <x-button wire:click="openModal" class="w-full px-4 py-2 text-xl font-bold text-white bg-blue-500 rounded-none hover:bg-blue-700">Ver Jogos</x-button>

    @if($modal)
        <x-modaal>
            
        </x-modaal>
    @endif
</div>
