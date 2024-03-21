@extends('layouts.template')


@section('title', 'Logros')

@section('content')
<div class="text-center border-b-4 border-black  w-1/3 m-auto ">
    <h2 class=" text-4xl my-3 font-bold  mb-5">Listado de logros</h2>
</div>

    <section id="section grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mx-10 my-5">
        @foreach ($logros as $logro)
            <span class="flex flex-col items-center bg-gray-100 border border-gray-200 rounded-lg shadow hover:bg-gray-200">
                <img class="rounded-t-lg md:h-64" src="/storage/landing/logrosImg.png" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">{{ $logro->nombre }}</h5>
                <p class="mb-3 font-normal text-gray-700">{{ $logro->descripcion }}</p>
            </div>
        </span>
        @endforeach
    </section>

@endsection
