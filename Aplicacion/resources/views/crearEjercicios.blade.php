<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ejercicios') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-gray-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-800">
                    <div class="max-w-md mx-auto">
                        <form action="{{route('ejercicios.store')}}" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="nombre">
                                    Nombre del ejericio
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="nombre" type="text" placeholder="Nombre del ejercicio" name="nombre">
                            </div>
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="grupos">
                                    grupos_musculares
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="grupos" type="text" placeholder="grupos musculares" name="grupos">
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="descripcion">
                                    Descripción
                                </label>
                                <textarea
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="descripcion" placeholder="Descripción" name="descripcion"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="descripcion">
                                    Subir imagen
                                </label>
                                <input type="file" name="imagen">
                            </div>
                            
                                <button
                                    class="border border-blue-800 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="submit">
                                    Crear Plato
                                </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
