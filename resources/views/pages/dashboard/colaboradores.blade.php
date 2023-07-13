<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <main class="h-full pb-16 overflow-y-auto">
            <div class="container grid px-6 mx-auto">
              <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Colaboradores
              </h2>
              <!-- CTA -->

  
            
              <!-- With actions -->
  
              <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Nombre</th>
                            <th class="px-4 py-3">Apellido</th>
                            <th class="px-4 py-3">Fecha de nacimiento</th>
                            <th class="px-4 py-3">Genero</th>
                            <th class="px-4 py-3">Direccion</th>
                            <th class="px-4 py-3">Estado</th>
                            <th class="px-4 py-3">Pais</th>
                            <th class="px-4 py-3">Codigo Postal</th>
                            <th class="px-4 py-3">Numero de Telefono</th>
                            <th class="px-4 py-3">Departamento</th>
                            <th class="px-4 py-3">Cargo</th>
                            <th class="px-4 py-3">Reporta a</th>
                            <th class="px-4 py-3">Accion</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @if (count($colaboradores) > 0)
                            @foreach ($colaboradores as $colaborador)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">{{ $colaborador->id }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->nombre }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->apellido }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->fecha_nacimiento }}
                                </td>
              
                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->genero }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->direccion }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->estado }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->pais }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->codigo_postal }}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->numero_telefono }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->departamento }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->cargo }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $colaborador->reporta_a }}
                                </td>

                              
                                <td class="px-4 py-3 text-sm">
                                  <a href="{{route('colaboradores.eliminar',$colaborador->id)}}">
                                    <p class="text-indigo-600 hover:text-indigo-900">Eliminar</p>
                                  </a>
                                </td>

                              
                            </tr>
                        @endforeach
                        @else
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3" colspan="14">
                                <div class="flex justify-center text-sm">
                                    <div>
                                        <p class="font-semibold">No hay colaboradores</p>
                                    </div>
                                </div>
                            </td>
                        @endif
                        </tbody>
                      </table>



                </div>
                </div>
              </div>
            </div>
          </main>
  
  
    </div>
  </x-app-layout>
  
