<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de ejercicios') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 ">
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
                                            Grupos musculares

                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ejercicios as $r)
                                    <tr class="bg-white border-b ">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                            {{ $r->nombre }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $r->descripcion }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <img src="{{ url($r->foto) }}" alt="foto" class="max-w-10" style="max-width: 120px;">
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $r->grupos_musculares }}
                                        </td>

                                        <td class="px-6 py-4 text-right">
                                            <a href="#"
                                                class="font-medium text-blue-600 hover:text-blue-700">Edit</a>
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
