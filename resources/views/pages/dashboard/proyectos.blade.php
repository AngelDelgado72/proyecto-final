<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <main class="h-full pb-16 overflow-y-auto">
            <div class="container grid px-6 mx-auto">
              <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Proyectos
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
                            <th class="px-4 py-3">Proyecto</th>
                            <th class="px-4 py-3">Cliente</th>
                            <th class="px-4 py-3">Fecha de inicio</th>
                            <th class="px-4 py-3">Fecha de fin</th>
                            <th class="px-4 py-3">Tarifa</th>
                            <th class="px-4 py-3">Prioridad</th>
                            <th class="px-4 py-3">Lider de proyecto</th>
                            <th class="px-4 py-3">Miembros del equipo</th>
                            <th class="px-4 py-3">Descripcion</th>
                            <th class="px-4 py-3">Accion</th>
                            

                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @if (count($proyectos) > 0)
                            @foreach ($proyectos as $proyecto)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">{{ $proyecto->id }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $proyecto->nombre_proyecto }}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    {{ $proyecto->cliente }}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    {{ $proyecto->fecha_inicio }}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    {{ $proyecto->fecha_fin }}
                                </td>   

                                <td class="px-4 py-3 text-sm">
                                    {{ $proyecto->tarifa }}
                                </td>   

                                <td class="px-4 py-3 text-sm">
                                    {{ $proyecto->prioridad }}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    {{ $proyecto->lider_proyecto }}

                                </td>

                                <td class="px-4 py-3 text-sm">
                                    {{ $proyecto->miembros_equipo }}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    {{ $proyecto->descripcion }}
                                </td>

                                <td class="px-4 py-3 text-sm">
                                    <a href="{{route('proyectos.eliminar',$proyecto->id)}}">
                                        <p class="text-indigo-600 hover:text-indigo-900">Eliminar</p>
                                      </a>
                                </td>

                            </tr>
                        @endforeach
                        @else
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3" colspan="11">
                                <div class="flex justify-center text-sm">
                                    <div>
                                        <p class="font-semibold">No hay proyectos</p>
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
  
