<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Ejercicios a Rutina') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('agregar_ejercicio_a_rutina') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="rutina" class="block text-gray-700 font-bold mb-2">Rutina:</label>
                            <select name="rutina" id="rutina" class="form-select block w-full mt-1">
                                @foreach ($rutinas as $rutina)
                                    <option value="{{ $rutina->id }}">{{ $rutina->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="ejercicio" class="block text-gray-700 font-bold mb-2">Ejercicio:</label>
                            <select name="ejercicio" id="ejercicio" class="form-select block w-full mt-1">
                                @foreach ($ejercicios as $ejercicio)
                                    <option value="{{ $ejercicio->id }}">{{ $ejercicio->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="repeticiones" class="block text-gray-700 font-bold mb-2">Repeticiones:</label>
                            <input type="text" name="repeticiones" id="repeticiones"
                                class="form-input w-full mt-1" placeholder="Ingrese las repeticiones">
                        </div>

                        <div class="mb-4">
                            <label for="series" class="block text-gray-700 font-bold mb-2">Series:</label>
                            <input type="text" name="series" id="series"
                                class="form-input w-full mt-1" placeholder="Ingrese las series">
                        </div>

                        <div class="mb-4">
                            <label for="rir" class="block text-gray-700 font-bold mb-2">rir:</label>
                            <input type="text" name="rir" id="rir"
                                class="form-input w-full mt-1" placeholder="Ingrese el rir">
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Añadir Ejercicio
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
