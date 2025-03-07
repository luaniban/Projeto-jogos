<div>
    <div>
    <x-buttonn :click="'openModal'">
        <div class="flex items-center justify-center">
        <img src="{{ asset('img/plus.svg') }}" alt="adicionar" class="w-8 h-8"/>
        <div>Adicionar</div>
        </div>
    </x-buttonn>
    </div>


    <div class="{{ $display }}">
        <x-modaal>

            <div class="flex items-center w-full h-full p-8 ">

                <div class="h-full w-[40%] bg-gray-100 p-2 mr-20">

                    <div class="w-[100%] flex justify-center mb-4">
                        <div class="text-2xl font-bold text-center text-white bg-blue-500 rounded-b-md">
                            Preencha os campos para criar uma nova coleção
                        </div>
                    </div>
                    <div class="w-[100%] flex flex-col justify-center items-center">

                        <div class="w-[80%]">
                            <div class="h-24 mb-2">
                                <div class="flex justify-center w-full">
                                    <h1 class="text-xl font-bold">Name</h1><div class="font-bold text-red-500">*</div>
                                </div>
                                <x-input placeholder='Insira o nome da coleção' wire:model="name" class="text-xl"/>
                            </div>

                            <div class="h-24 ">
                                <div class="flex justify-center w-full">
                                    <h1 class="text-xl font-bold">Descrição</h1><div class="font-bold text-red-500">*</div>
                                </div>
                                <x-input placeholder='Insira a descrição da coleção' wire:model='description'></x-input>
                            </div>
                        </div>
                    </div>
                        <div class="flex justify-end w-full mt-40">
                            <x-buttonn :click="'store'">Salvar</x-buttonn>
                        </div>
                </div>

                <div class="p-4 bg-gray-300 w-[50%] rounded-md  overflow-y-auto h-[100%] relative">
                    <div class="w-[100%] mb-4 flex items-center">
                        <div class="w-[40%]">
                            <div id="topDaTabela"></div>
                            <x-input class="bg-white " placeholder="Pesquisar..." icon="magnifying-glass" ></x-input>
                        </div>
                            <x-button icon='adjustments-horizontal' class="p-1 mt-1 ml-4 bg-white"></x-button>
                    </div>
                <table class="w-full text-center ">
                    <thead class="bg-gray-300 border-2">
                        <th class="w-[33%]">Title</th>
                        <th class="w-[33%]">Description</th>
                    </thead>
                    <tbody class="bg-gray-100 ">
                        @foreach ($all as $jogo)
                        <tr class="border-2">
                            <div class="flex items-center">
                                <td class="border-r-2 hover:bg-gray-200">
                                    <x-button icon="plus" color='blue' class="h-12"></x-button>
                                    <div>{{ $jogo['title'] }}</div>
                                </td>
                                <td class="hover:bg-gray-200">{{ $jogo['short_description'] }}</td>
                                <td><img src="{{ $jogo['thumbnail'] }}" class="w-full h-full"></td>
                            </div>
                        </tr>
                        @endforeach
                        </tbody>

                           <a href="#topDaTabela"> <x-icon class="fixed w-12 h-12 px-1 py-1 bg-blue-500 rounded-3xl bottom-44" icon='arrow-long-up' color='white'></x-icon></a>

                    </table>

                </div>

            </div>
    </x-modaal>
    </div>

</div>
