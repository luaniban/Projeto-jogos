<div>
    @if($modal)
    <div>
        <x-modaal>
                <div class="flex items-center justify-center w-full h-full p-8">
                    <div class="h-full w-[40%] bg-gray-100 p-2 mr-20">
                        <div class="w-[100%] flex justify-center mb-4">
                            <div class="text-2xl font-bold text-center text-white bg-blue-500 rounded-b-md">
                                Preencha os campos para editar sua coleção
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
                        <div class="flex justify-end w-full mt-24">
                            <x-buttonn :click="'save'">Salvar</x-buttonn>
                        </div>

                    </div>
                    <div class="h-full w-[40%] bg-gray-100 p-2 flex flex-wrap overflow-y-auto justify-center gap-4">
                        <div class="w-[40%] h-[50%] bg-gray-200">
                            <div class="w-full h-[80%]">img</div>
                            <div class="flex items-end justify-end w-full h-[20%]">
                                <x-button color="red" icon='trash' class="mb-1 mr-1 text-3xl" :click="'delete'" ></x-button>
                            </div>
                        </div>
                        <div class="w-[40%] h-[50%] bg-gray-200 ">
                            <div class="w-full h-[80%]">img</div>
                            <div class="flex items-end justify-end w-full h-[20%]">
                                <x-button color="red" icon='trash' class="mb-1 mr-1 text-3xl" :click="'delete'" ></x-button>
                            </div>
                        </div>

                        <div class="w-[40%] h-[50%] bg-gray-200">
                            <div class="w-full h-[80%]">img</div>
                            <div class="flex items-end justify-end w-full h-[20%]">
                                <x-button color="red" icon='trash' class="mb-1 mr-1 text-3xl" :click="'delete'" ></x-button>
                            </div>
                        </div>
                        <div class="w-[40%] h-[50%] bg-gray-200 ">
                            <div class="w-full h-[80%]">img</div>
                            <div class="flex items-end justify-end w-full h-[20%]">
                                <x-button color="red" icon='trash' class="mb-1 mr-1 text-3xl" :click="'delete'" ></x-button>
                            </div>
                        </div>

                        <div class="w-[40%] h-[50%] bg-gray-200">
                            <div class="w-full h-[80%]">img</div>
                            <div class="flex items-end justify-end w-full h-[20%]">
                                <x-button color="red" icon='trash' class="mb-1 mr-1 text-3xl" :click="'delete'" ></x-button>
                            </div>
                        </div>
                        <div class="w-[40%] h-[50%] bg-gray-200 ">
                            <div class="w-full h-[80%]">img</div>
                            <div class="flex items-end justify-end w-full h-[20%]">
                                <x-button color="red" icon='trash' class="mb-1 mr-1 text-3xl" :click="'delete'" ></x-button>
                            </div>
                        </div>
                        <div class="w-[40%] h-[50%] bg-gray-200">
                            <div class="w-full h-[80%]">img</div>
                            <div class="flex items-end justify-end w-full h-[20%]">
                                <x-button color="red" icon='trash' class="mb-1 mr-1 text-3xl" :click="'delete'" ></x-button>
                            </div>
                        </div>
                        <div class="w-[40%] h-[50%] bg-gray-200 ">
                            <div class="w-full h-[80%]">img</div>
                            <div class="flex items-end justify-end w-full h-[20%]">
                                <x-button color="red" icon='trash' class="mb-1 mr-1 text-3xl" :click="'delete'" ></x-button>
                            </div>
                        </div>

                    </div>
                </div>

            </x-modaal>
    </div>
    @endif
</div>
