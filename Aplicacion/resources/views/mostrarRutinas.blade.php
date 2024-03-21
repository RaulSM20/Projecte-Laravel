<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de rutinas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 ">
                    {{-- Añadir ejercicios a las rutinas --}}
                    <div class="mb-14">
                        <h2 class="text-xl font-bold">Añadir ejercicios a las rutinas</h2>
                        <a href="{{ route('agregar-ejercicios') }}"
                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow">Añadir</a>
                    </div>
                    {{-- tabla usuarios --}}
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Descripcion
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Foto
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Nivel Dificultad

                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rutinas as $r)
                                    <tr class="bg-white border-b ">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                            {{ $r->nombre }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $r->descripcion }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <img src="{{ url($r->foto) }}" alt="foto" class="max-w-10"
                                                style="max-width: 120px;">
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $r->nivel_dificultad }}
                                        </td>

                                        <td class="px-6 py-4 text-right">
                                            <a href="{{ route('rutinas.edit', ['rutina' => $r]) }}"
                                                class="font-medium text-blue-600 hover:text-blue-700">Edit</a>
                                            <form action="{{ route('rutinas.destroy', ['rutina' => $r]) }}"
                                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta rutina?');"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="font-medium text-red-600 hover:text-red-700 ml-2">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
