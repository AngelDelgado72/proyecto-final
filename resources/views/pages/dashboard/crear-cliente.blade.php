<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
      <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
              <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Clientes
              </h2>
            <!-- With actions -->

          <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <form method="post" action="{{ route('clientes.create') }}" novalidate>
                    @csrf   
                    <div class="grid grid-cols-1 gap-4">
                        
                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="nombre">{{ __('Nombre') }}
                            @error('nombre')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="nombre" type="text" name="nombre" value="{{ old('nombre') }}" placeholder="Ingrese nombre de la empresa" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="apellido">{{ __('Apellido') }}
                            @error('apellido')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="apellido" type="text" name="apellido" value="{{ old('apellido') }}" placeholder="Ingrese apellido de la empresa" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="nombre_usuario">{{ __('Nombre de usuario') }}
                            @error('nombre_usuario')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="nombre_usuario" type="text" name="nombre_usuario" value="{{ old('nombre_usuario') }}" placeholder="Ingrese nombre de usuario" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="email">{{ __('Correo electrónico') }}
                            @error('email')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Ingrese correo electrónico" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="id_cliente">{{ __('ID Cliente') }}
                            @error('id_cliente')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="id_cliente" type="number" name="id_cliente" value="{{ old('id_cliente') }}" placeholder="Ingrese ID del cliente" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="telefono">{{ __('Telefono') }}
                            @error('telefono')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="telefono" type="number" name="telefono" value="{{ old('telefono') }}" placeholder="Ingrese telefono" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="nombre_empresa">{{ __('Nombre de la empresa') }}
                            @error('nombre_empresa')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="nombre_empresa" type="text" name="nombre_empresa" value="{{ old('nombre_empresa') }}" placeholder="Ingrese nombre de la empresa" />
                        </div>
                        
                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="submit"
                            class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-lg active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo">
                            <span>Buscar</span>
                        </button>
                    </div>
              </form>
              </div>
          </div>
          </div>
      </main>
  </div>
</x-app-layout>
