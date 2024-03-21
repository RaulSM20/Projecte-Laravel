@extends('layouts.template')


@section('title', 'Inicio')


@section('content')

    {{-- baner --}}
    <section class="flex align-middle justify-center relative" id="banerLanding">
        <div class=" w-3/5 mb-10 mt-10 relative ">
            <img src="storage/landing/bannerlanding.jpg" alt="imagen"
                class=" border rounded-lg shadow-inner brightness-50 opacity-75">
            <div class="absolute bottom-24  left-24 text-5xl  text-white font-bold">Get stronger, faster and healthier</div>
        </div>
    </section>

    {{-- info principal --}}
    <section class="flex justify-center mt-14">
        <div class="flex flex-col gap-14">
            <h2 class=" font-bold text-5xl">What you can do on FitHub</h1>

                <div class="grid grid-cols-4 gap-4">
                    <div class="w-56">
                        <img src="storage/landing/retos.jpg" alt="" class=" border rounded-lg shadow-inner">
                        <h4 class="font-bold text-xl">Retos</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="w-56">
                        <img src="storage/landing/entreno.jpg" alt="" class=" border rounded-lg shadow-inner ">
                        <h4 class="font-bold text-xl">Entrenamientos</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="w-56">
                        <img src="storage/landing/medidas.jpg" alt="" class=" border rounded-lg shadow-inner ">
                        <h4 class="font-bold text-xl">Seguimiento Personal</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="w-56">
                        <img src="storage/landing/logros.png" alt="" class=" border rounded-lg shadow-inner ">
                        <h4 class="font-bold text-xl">Logros</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
        </div>
    </section>

    {{-- info cierre --}}

    <section class="flex justify-center mt-14  align-middle mb-14">
        <div class="flex flex-col gap-5 justify-center text-center">
            <h2 class="text-5xl font-bold">Start your journey today</h2>
            <p>Get access to personalized workouts, guides and more</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-1/4 m-auto">Sign
                Up</button>
        </div>

    </section>

@endsection
