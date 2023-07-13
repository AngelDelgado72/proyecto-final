<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <main class="h-full pb-16 overflow-y-auto">
            <div class="container grid px-6 mx-auto">
              <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Clientes
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
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">ID Cliente</th>
                            <th class="px-4 py-3">Telefono</th>
                            <th class="px-4 py-3">Empresa</th>
                            <th class="px-4 py-3">Accion</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @if (count($clientes) > 0)
                            @foreach ($clientes as $cliente)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div>
                                            <p class="font-semibold">{{ $cliente->id }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $cliente->nombre }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $cliente->apellido }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $cliente->email }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $cliente->id_cliente }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $cliente->telefono }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $cliente->nombre_empresa }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <a href="{{route('clientes.eliminar',$cliente->id)}}">
                                        <p class="text-indigo-600 hover:text-indigo-900">Eliminar</p>
                                      </a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3" colspan="8">
                                <div class="flex justify-center text-sm">
                                    <div>
                                        <p class="font-semibold">No hay clientes</p>
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
  
