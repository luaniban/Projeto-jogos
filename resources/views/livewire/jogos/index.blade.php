<div class="flex flex-col items-center justify-center w-full ">
    <header class="flex items-center justify-around w-full h-10 bg-blue-600">
        <div class="font-bold text-white">Home</div>
        <a class="font-bold text-white" href="#colecao">Coleções</a>
        <div class="font-bold text-white">Sobre</div>
        <div class="font-bold text-white">Contato</div>
    </header>
    <div id="content" class="relative w-4/5">
        <div class="h-screen">

            <div class="w-full py-2 my-4 text-3xl text-center text-white bg-blue-400 h-30">FAÇA A COLEÇÃO DOS SEUS JOGOS FAVORITOS</div>
            <div class="flex">
                <img src="{{ asset('img/imgDefault.png')  }}" class="w-1/2 border-4 h-60"/>
                <img src="{{ asset('img/imgDefault.png')  }}" class="w-1/2 border-t-4 border-b-4 h-60"/>
            </div>
            <div class="flex">
                <img src="{{ asset('img/imgDefault.png')  }}" class="w-1/3 border-l-4 border-r-4 rounded-bl-lg"/>
                <img src="{{ asset('img/imgDefault.png')  }}" class="w-1/3 border-r-4 h-60"/>
                <img src="{{ asset('img/imgDefault.png')  }}" class="w-1/3 rounded-br-lg h-60"/>
            </div>
            <div class="flex items-center justify-center w-full mt-3">


        </div>

        </div>

        <div id="colecao" class="w-full h-screen bg-gray-300">
            <div class="w-full py-2 text-3xl text-center text-white bg-blue-400 h-30">Suas coleções ficaram aqui</div>

            <div class="h-screen p-4 m-8 bg-white">
                <livewire:jogos.create>
                <div class="flex flex-wrap h-screen gap-2 mt-4 ml-32">
                    @foreach ($allColetions as $card)
                    <div id="card1" class="h-[40%] w-[20%] bg-gray-200">
                        <div class="w-full">{{$card->name}}</div>
                        <img class="h-[80%] w-full border-4" src="{{ asset('img/imgDefault.png') }}"></img>
                        <x-button @click="$dispatch('dispatch-modal-edit', { id: {{ $card->id }} })" class="w-full px-4 py-2 text-xl font-bold text-white bg-blue-500 rounded-none hover:bg-blue-700">Ver Jogos</x-button>

                    </div>
                    @endforeach
                    <livewire:jogos.edit>
                </div>
            </div>




        </div>
    </div>
</div>
