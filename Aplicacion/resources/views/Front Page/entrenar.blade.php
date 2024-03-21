@extends('layouts.template')

@section('title', 'Entrenar')

@section('content')

    <section>
        
        @if ($rutinaAsignada)
        <div>
            <h2 class="text-4xl p-10 text-center">Mi Rutina</h2>
        </div>
            <div class=" m-10 border bg-gray-300 border-gray-200 rounded-lg shadow">
                <a href="{{ route('entrenar.ejercicios', $rutinaAsignada->id) }}">
                    <img class="m-auto mt-2 rounded-t-lg  w-60 h-60" src="{{ url($rutinaAsignada->foto) }}"
                        alt="{{ $rutinaAsignada->nombre }}" />
                </a>
                <div class="p-5">
                    <a href="{{ route('entrenar.ejercicios', $rutinaAsignada->id) }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $rutinaAsignada->nombre }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700">{{ $rutinaAsignada->descripcion }}</p>
                    <a href="{{ route('entrenar.ejercicios', $rutinaAsignada->id) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Ver Ejercicios
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        @endif

        <div>
            <h2 class="text-4xl p-10 text-center">Nuestras rutinas</h2>
        </div>

        <div class="grid grid-cols-3 gap-4">
            @foreach ($rutinas as $rutina)
                <div class=" m-10 border bg-gray-300 border-gray-200 rounded-lg shadow">
                    <a href="{{ route('entrenar.ejercicios', $rutina->id) }}">
                        <img class="m-auto mt-2 rounded-t-lg  w-60 h-60" src="{{ url($rutina->foto) }}"
                            alt="{{ $rutina->nombre }}" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('entrenar.ejercicios', $rutina->id) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{ $rutina->nombre }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">{{ $rutina->descripcion }}</p>
                        <a href="{{ route('entrenar.ejercicios', $rutina->id) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Ver Ejercicios
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

@endsection
