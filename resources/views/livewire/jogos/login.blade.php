<div>
    {{-- <div class="flex items-center justify-center w-screen h-screen bg-gray-200">
        <div class="rounded-md h-screen w-[50%] p-8 bg-gray-400">
            <div class="flex flex-col gap-4 bg-white w-[90%] p-8 justify-center rounded-md">
                <div class="flex flex-col items-center justify-center w-full ">
                    <h1 class="px-2 py-2 text-2xl bg-gray-300 rounded-md">Login</h1>
                    <hr class="w-full mt-2">
                </div>
                <div class="w-[80%]">
                    <div class="flex">
                        <h1>E-mail</h1>
                        <div class="ml-1 text-red-500">*</div>
                    </div>
                    <x-input type="text" placeholder="Insira seu e-mail"/>
                </div>
                <div class="w-[80%]">
                    <div class="flex">
                        <h1>Senha</h1>
                        <div class="ml-1 text-red-500">*</div>
                    </div>
                    <x-input type="text" placeholder="Insira sua senha"/>

                </div>
                <hr class="w-full mt-4">
            </div>
        </div>
        <div class="bg-gray-300 w-[50%] h-screen">
        </div>
    </div> --}}

    <div class="flex w-screen h-screen">
        <div class="w-[50%] h-screen p-4">
            <div class="flex justify-center w-full h-full bg-blue-500 rounded-xl">
                <div class="h-[66%] flex items-end justify-center">
                    <img src="{{ asset('img/login-image.svg')  }}" class="w-[100%] p-2 h-full"/>
                </div>
            </div>
        </div>
        <div class="w-[50%] h-screen">
            <div class="flex items-center justify-center w-full h-full ">
                <div class=" bg-white w-[50%] h-[50%] flex flex-col p-2">
                    @if($register)
                        <div class="mb-4 text-3xl font-bold">Registro</div>
                        <input type="text" class="h-10 pl-2 bg-gray-100 rounded-md hover:bg-gray-200" placeholder="Crie seu e-mail">
                        <input type="text" class="h-10 pl-2 mt-2 bg-gray-100 rounded-md hover:bg-gray-200" placeholder="Crie sua senha">
                        <input type="text" class="h-10 pl-2 mt-2 bg-gray-100 rounded-md hover:bg-gray-200" placeholder="Confirme sua senha">
                        <button class="px-1 py-2 mt-6 font-bold text-white bg-blue-500 hover:bg-blue-700">Registrar</button>

                        <button class="flex justify-end gap-1 mt-2" @click="$dispatch('dispatch-login')" >
                            <div class="text-gray-500 ">Não é registrado?</div>
                            <div class="text-blue-500 hover:text-blue-600">Registrar-se</div>
                        </button>
                    @endif
                    @if($login)
                        <div class="mb-4 text-3xl font-bold">Login</div>
                        <input type="text" class="h-10 pl-2 bg-gray-100 rounded-md hover:bg-gray-200" placeholder="Insira seu e-mail">
                        <input type="text" class="h-10 pl-2 mt-2 bg-gray-100 rounded-md hover:bg-gray-200" placeholder="Insira sua senha">
                        <button class="px-1 py-2 mt-6 font-bold text-white bg-blue-500 hover:bg-blue-700" @click="$dispatch('dispatch-home')">Entrar</button>

                        <button class="flex justify-end gap-1 mt-2" @click="$dispatch('dispatch-register')" >
                            <div class="text-gray-500 ">Vocâ já tem cadastro?</div>
                            <div class="text-blue-500 hover:text-blue-600">Login</div>
                        </button>
                    @endif



                </div>
            </div>

        </div>
    </div>

</div>


