<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
      <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
              <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Colaboradores
              </h2>
            <!-- With actions -->

          <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <form method="post" action="{{ route('colaboradores.create') }}" novalidate>
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
                            <x-jet-label for="fecha_nacimiento">{{ __('Fecha de nacimiento') }}
                            @error('fecha_nacimiento')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="fecha_nacimiento" type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" placeholder="Ingrese fecha de nacimiento" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="genero">{{ __('Género') }}
                            @error('genero')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <select id="genero" name="genero" class="block w-full mt-1 text-gray-800 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="direccion">{{ __('Dirección') }}
                            @error('direccion')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="direccion" type="text" name="direccion" value="{{ old('direccion') }}" placeholder="Ingrese dirección de la empresa" />
                        </div>
                        
                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="estado">{{ __('Estado') }}
                            @error('estado')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="estado" type="text" name="estado" value="{{ old('estado') }}" placeholder="Ingrese el estado" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="pais">{{ __('País') }}
                            @error('pais')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="pais" type="text" name="pais" value="{{ old('pais') }}" placeholder="Ingrese el país" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="codigo_postal">{{ __('Código postal') }}
                            @error('codigo_postal')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="codigo_postal" type="text" name="codigo_postal" value="{{ old('codigo_postal') }}" placeholder="Ingrese el código postal" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="numero_telefono">{{ __('Número de teléfono') }}
                            @error('numero_telefono')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="numero_telefono" type="text" name="numero_telefono" value="{{ old('numero_telefono') }}" placeholder="Ingrese el número de teléfono" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="departamento">{{ __('Departamento') }}
                            @error('departamento')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>

                            <select id="departamento" name="departamento" class="block w-full mt-1 text-gray-800 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="Desarrollo">Desarrollo</option>
                                <option value="Diseño">Diseño</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Ventas">Ventas</option>
                                <option value="Recursos Humanos">Recursos Humanos</option>
                                <option value="Finanzas">Finanzas</option>
                            </select>
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">                            
                            <x-jet-label for="cargo">{{ __('Cargo') }}
                            @error('cargo')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror                            
                            </x-jet-label>
                            <x-jet-input id="cargo" type="text" name="cargo" value="{{ old('cargo') }}" placeholder="Ingrese el cargo" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">                            
                            <x-jet-label for="reporta_a">{{ __('Reporta a') }}
                            @error('reporta_a')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror                            
                            </x-jet-label>
                            <x-jet-input id="reporta_a" type="text" name="reporta_a" value="{{ old('reporta_a') }}" placeholder="Ingrese el nombre de la persona a la que reporta" />
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
