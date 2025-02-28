<div class="flex flex-col items-center justify-center w-full ">
    <header class="flex items-center justify-around w-full h-10 bg-blue-600">
        <div class="font-bold text-white">Home</div>
        <a class="font-bold text-white" href="#colecao">Coleções</a>
        <div class="font-bold text-white">Sobre</div>
        <div class="font-bold text-white">Contato</div>
    </header>
    <div id="content" class="w-4/5">
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
                <x-buttonn class="">
                    <div class="flex items-center justify-center">
                    <img src="{{ asset('img/plus.svg') }}" alt="" class="w-8 h-8 "/>
                    <div>Adicionar</div>
                    </div>
                </x-buttonn>
                <div class="h-screen mt-4">
                    <div id="card1" class="h-[40%] w-40 bg-gray-200">
                        <img class="h-[80%] w-full border-4" src="{{ asset('img/imgDefault.png') }}"></img>
                        <div class="h-[20%] w-full bg-blue-700 text-center text-white text-2xl pt-3 rounded-b-md">Ver jogos</div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
