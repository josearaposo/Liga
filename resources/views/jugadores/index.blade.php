<x-app-layout>
    <div class="relative overflow-x-auto w-3/4 mx-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Posicion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edad
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Foto
                    </th>
                    <th scope="col" class="px-6 py-3" colspan="2">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jugadores as $jugador)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a class="text-blue-500 blue" href="{{ route('jugadores.show', $jugador) }}">
                                {{$jugador->nombre }}
                            </a>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a class="text-blue-500 blue" href="{{ route('jugadores.show', $jugador) }}">
                                {{$jugador->posicion }}
                            </a>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a class="text-blue-500 blue" href="{{ route('jugadores.show', $jugador) }}">
                                {{$jugador->edad }}
                            </a>
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="hidden lg:mt-0 w-40 lg:col-span-3 lg:flex">
                                @if ($jugador->existeImagen())
                                    <img src="{{ asset($jugador->imagen_url) }}" class="h-fit" alt="Existe"/>
                                @else
                                    <img src="{{asset("prueba.jpeg")}}" class="h-fit" alt="prueba"/>
                                @endif
                            </div>
                        </th>
{{--                         <td class="px-6 py-4">
                            <a href="{{ route('jugadores.edit', ['jugador' => $jugador]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                <x-primary-button>
                                    Editar
                                </x-primary-button>
                            </a>
                        </td> --}}
{{--                         <td class="px-6 py-4">
                            <form action="{{ route('jugadores.destroy', ['jugador' => $jugador]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-primary-button class="bg-red-500">
                                    Borrar
                                </x-primary-button>
                            </form>
                        </td>
                    </tr> --}}
                @endforeach
            </tbody>
        </table>
        <form action="{{ route('jugadores.create') }}" class="flex justify-center mt-4 mb-4">
            <x-primary-button class="bg-green-500 mb-2">Insertar nuevo jugador</x-primary-button>
        </form>
    </div>
</x-app-layout>
