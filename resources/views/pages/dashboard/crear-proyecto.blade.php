<x-app-layout>
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
      <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
              <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Proyectos
              </h2>
            <!-- With actions -->

          <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <form method="post" action="{{ route('proyectos.create') }}" novalidate>
                    @csrf   
                    <div class="grid grid-cols-1 gap-4">
                        
                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="nombre_proyecto">{{ __('Nombre del proyecto') }}
                            @error('nombre_proyecto')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="nombre_proyecto" type="text" name="nombre_proyecto" value="{{ old('nombre_proyecto') }}" placeholder="Ingrese nombre del proyecto" />
                        </div>


                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="cliente">{{ __('Cliente') }}
                            @error('cliente')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="cliente" type="text" name="cliente" value="{{ old('cliente') }}" placeholder="Ingrese nombre del cliente" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="fecha_inicio">{{ __('Fecha de inicio') }}
                            @error('fecha_inicio')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="fecha_inicio" type="date" name="fecha_inicio" value="{{ old('fecha_inicio') }}" placeholder="Ingrese fecha de inicio" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="fecha_fin">{{ __('Fecha de fin') }}
                            @error('fecha_fin')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="fecha_fin" type="date" name="fecha_fin" value="{{ old('fecha_fin') }}" placeholder="Ingrese fecha de fin" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="tarifa">{{ __('Tarifa') }}
                            @error('tarifa')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="tarifa" type="number" name="tarifa" value="{{ old('tarifa') }}" placeholder="Ingrese tarifa" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="prioridad">{{ __('Prioridad') }}
                            @error('prioridad')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>

                            <select id="prioridad" name="prioridad" class="block w-full mt-1 text-gray-800 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="Alta">Alta</option>
                                <option value="Mediana">Mediana</option>
                                <option value="Baja">Baja</option>
                            </select>
                        </div>


                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="lider_proyecto">{{ __('Lider de proyecto') }}
                            @error('lider_proyecto')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="lider_proyecto" type="text" name="lider_proyecto" value="{{ old('lider_proyecto') }}" placeholder="Ingrese el lider del proyecto" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="miembros_equipo">{{ __('Miembros del equipo') }}
                            @error('miembros_equipo')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <x-jet-input id="miembros_equipo" type="number" name="miembros_equipo" value="{{ old('miembros_equipo') }}" placeholder="Ingrese los miembros del equipo" />
                        </div>

                        <div class="relative text-gray-500 focus-within:text-indigo-600 dark:focus-within:text-indigo-400">
                            <x-jet-label for="descripcion">{{ __('Descripcion') }}
                            @error('descripcion')
                                <span class="text-red-500 my-1 rounded-lg text-sm p-2 text-center">{{ $message }}</span>
                            @enderror
                            </x-jet-label>
                            <textarea id="descripcion" name="descripcion" rows="3" class="block w-full mt-1 text-gray-800 dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Ingrese la descripcion del proyecto">{{ old('descripcion') }}</textarea>
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
