<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rutinas') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-gray-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-800">
                    <div class="max-w-md mx-auto">
                        <form action="{{route('ejercicios.update', ['ejercicio' => $ejercicio->id])}}" class=" shadow-md rounded px-8 pt-6 pb-8 mb-4"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="nombre">
                                    Nombre del ejercicio
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="nombre" type="text" placeholder="Nombre de la rutina" name="nombre" value="{{$ejercicio->nombre}}">
                            </div>
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="grupos">
                                    Grupos musculares
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="dificultad" type="text" placeholder="Nivel de dificultad" name="grupos" value="{{$ejercicio->grupos_musculares}}">
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="descripcion">
                                    Subir imagen
                                </label>
                                <input type="file" name="imagen">
                            </div>
                            <div class="mb-4">
                                <label class="block text-white text-sm font-bold mb-2" for="descripcion">
                                    Descripción
                                </label>
                                <textarea
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="descripcion" placeholder="Descripción" name="descripcion">{{$ejercicio->descripcion}}</textarea>
                            </div>
                            
                                <button
                                    class="border border-blue-800 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                    type="submit">
                                    Modificar
                                </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
