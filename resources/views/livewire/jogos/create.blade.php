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
                    <div class="w-[50%]">
                        <div class="mb-2">
                            <x-input placeholder='Insira o nome da coleção' label='Nome *' class=""></x-input>
                        </div>
                        <x-input placeholder='Insira a descrição da coleção' label='Descrição'></x-input>
                        </div>
                </div>

                <div class="p-3 bg-gray-300 w-[50%]">
                    <div class="w-[20%] mb-4">
                        <x-input class="bg-white " placeholder="Pesquisar..." icon="magnifying-glass"></x-input>
                    </div>
                <table class="w-full text-center">
                    <thead class="bg-gray-300 border-2">
                        <th class="w-[33%]">Adicionar</th>
                        <th class="w-[33%]">Title</th>
                        <th class="w-[33%]">Description</th>
                    </thead>
                    <tbody class="bg-gray-100 ">
                        @foreach ($games as $jogo)
                        <tr class="border-2">
                            <td class="border-r-2 hover:bg-gray-200"><x-button icon="plus" color='blue'></x-button></td>
                            <td class="border-r-2 hover:bg-gray-200">{{ $jogo['title'] }}</td>
                            <td class="hover:bg-gray-200">{{ $jogo['short_description'] }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
    </x-modaal>
    </div>

</div>
