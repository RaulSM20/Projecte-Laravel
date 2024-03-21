@extends('layouts.template')

@section('title', 'Entrenar')

@section('content')

    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">

        <h1 class="text-3xl font-bold text-gray-800 mb-8">Ejercicios de la rutina: {{ $rutina->nombre }}</h1>

        @foreach ($ejercicios as $ejercicio)
            <div class="bg-white shadow-sm rounded-lg mb-4">
                <div class="p-4">
                    <p class="text-lg font-semibold text-gray-800">{{ $ejercicio->nombre }}</p>
                    <p class="text-sm text-gray-600">Número de series: {{ $ejercicio->pivot->numero_series }}</p>
                    <p class="text-sm text-gray-600">Número de repeticiones: {{ $ejercicio->pivot->numero_repeticiones }}</p>
                    <p class="text-sm text-gray-600">RIR: {{ $ejercicio->pivot->rir }}</p>
                </div>
            </div>
        @endforeach

        @if (!$usuario->rutina->contains($rutina))
            <form action="{{ route('asignar.rutina', $rutina->id) }}" method="POST">
                @csrf
                <button type="submit"
                    class="block w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Asignar Rutina
                </button>
            </form>
        @endif

    </div>

@endsection
