<div>
    <div>
        <div class="flex items-center justify-center w-full h-screen bg-[rgba(0,0,0,0.17)]  top-0 fixed left-0">
            <div wire:click="closeModal" class= "relative w-full h-screen"></div>
            <div class="w-[80%] h-[70%] bg-white absolute rounded-xl">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
