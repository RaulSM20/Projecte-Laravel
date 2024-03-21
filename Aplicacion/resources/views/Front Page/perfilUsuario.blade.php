@extends('layouts.template')

@section('title', 'Perfil')

@section('header')

    <div class="bg-gray-100 font-sans w-full m-0">
        <div class="bg-white shadow">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between py-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-purple-600" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M14.5,16 C14.2238576,16 14,15.7761424 14,15.5 L14,9.5 C14,9.22385763 14.2238576,9 14.5,9 L16,9 C17.1045695,9 18,9.8954305 18,11 C18,11.4116588 17.8756286,11.7942691 17.6624114,12.1123052 C18.4414283,12.3856578 19,13.1275982 19,14 C19,15.1045695 18.1045695,16 17,16 L14.5,16 Z M15,15 L17,15 C17.5522847,15 18,14.5522847 18,14 C18,13.4477153 17.5522847,13 17,13 L15,13 L15,15 Z M15,12 L16,12 C16.5522847,12 17,11.5522847 17,11 C17,10.4477153 16.5522847,10 16,10 L15,10 L15,12 Z M12.9499909,4 L19.5,4 C20.8807119,4 22,5.11928813 22,6.5 L22,19.5 C22,20.8807119 20.8807119,22 19.5,22 L13.5,22 C12.2700325,22 11.2475211,21.1117749 11.0389093,19.9417682 C10.8653433,19.9799013 10.6850188,20 10.5,20 L4.5,20 C3.11928813,20 2,18.8807119 2,17.5 L2,4.5 C2,3.11928813 3.11928813,2 4.5,2 L10.5,2 C11.709479,2 12.7183558,2.85887984 12.9499909,4 Z M13,5 L13,17.5 C13,18.3179089 12.6072234,19.0440799 12,19.5001831 C12.0000989,20.3285261 12.6716339,21 13.5,21 L19.5,21 C20.3284271,21 21,20.3284271 21,19.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L13,5 Z M8.56005566,11.4964303 C8.54036595,11.4987873 8.52032459,11.5 8.5,11.5 L6.5,11.5 C6.47967541,11.5 6.45963405,11.4987873 6.43994434,11.4964303 L5.96423835,12.6856953 C5.86168164,12.9420871 5.57069642,13.066795 5.31430466,12.9642383 C5.0579129,12.8616816 4.93320495,12.5706964 5.03576165,12.3143047 L7.03576165,7.31430466 C7.20339081,6.89523178 7.79660919,6.89523178 7.96423835,7.31430466 L9.96423835,12.3143047 C10.066795,12.5706964 9.9420871,12.8616816 9.68569534,12.9642383 C9.42930358,13.066795 9.13831836,12.9420871 9.03576165,12.6856953 L8.56005566,11.4964303 Z M8.16148352,10.5 L7.5,8.8462912 L6.83851648,10.5 L8.16148352,10.5 Z M10.5,3 L4.5,3 C3.67157288,3 3,3.67157288 3,4.5 L3,17.5 C3,18.3284271 3.67157288,19 4.5,19 L10.5,19 C11.3284271,19 12,18.3284271 12,17.5 L12,4.5 C12,3.67157288 11.3284271,3 10.5,3 Z M6.5,18 C6.22385763,18 6,17.7761424 6,17.5 C6,17.2238576 6.22385763,17 6.5,17 L8.5,17 C8.77614237,17 9,17.2238576 9,17.5 C9,17.7761424 8.77614237,18 8.5,18 L6.5,18 Z M15.5,20 C15.2238576,20 15,19.7761424 15,19.5 C15,19.2238576 15.2238576,19 15.5,19 L17.5,19 C17.7761424,19 18,19.2238576 18,19.5 C18,19.7761424 17.7761424,20 17.5,20 L15.5,20 Z" />
                        </svg>
                    </div>
                    @auth

                        <div class="hidden sm:flex sm:items-center">
                            <a href="{{ url('/') }}"
                                class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Inicio</a>
                            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Retos</a>
                            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Logros</a>
                            <a href="#" class="text-gray-800 text-sm font-semibold hover:text-purple-600">Entrenar</a>
                        </div>
                    @endauth

                    <div class="hidden sm:flex sm:items-center gap-3">
                        @guest
                            <!-- Mostrar los enlaces de "Iniciar Sesión" y "Registrarse" -->
                            <a href="{{ route('login') }}"
                                class="text-gray-800 text-sm font-semibold hover:text-purple-600 mr-4">Iniciar Sesión</a>
                            <a href="{{ route('register') }}"
                                class="text-gray-800 text-sm font-semibold border px-4 py-2 rounded-lg hover:text-purple-600 hover:border-purple-600">Registrarse</a>
                        @endguest

                        @auth
                            @if (auth()->user()->hasRole('admin'))
                                <!-- Mostrar el nombre del usuario -->
                                <a href="{{url('user/perfil/'.auth()->user()->id)}}" class="text-gray-800 text-sm font-semibold">{{ auth()->user()->name }}</a>
                                <a href="{{ url('/dasboard') }}" class="text-gray-800 text-sm font-semibold">Dashboard</a>
                            @elseif(auth()->user()->hasRole('user'))
                                <a href="{{url('user/perfil/'.auth()->user()->id)}}" class="text-gray-800 text-sm font-semibold">{{ auth()->user()->name }}</a>
                            @endif

                            <!-- Formulario de cierre de sesión -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="font-semibold text-gray-800 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-sm">Cerrar
                                    Sesión</a>
                            </form>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')

<section class="flex flex-col space-y-8 justify-center align-middle mb-14">
    <div class="border pt-10 pb-10 flex justify-center flex-col text-center bg-gray-200">
        <h2 class="text-xl font-bold">Tu Perfil</h2>
    </div>

    <div class="ml-14 mr-14">
        <h2 class="text-xl font-bold">Seguimiento</h2>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Fecha
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Peso
                        </th>
                    </tr>
                </thead>
                <tbody> 
                    @foreach ($progresos as $progreso)
                        <tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-700">
                            <td class="px-6 py-4 font-medium whitespace-nowrap">
                                {{ $progreso->fecha }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $progreso->peso }} KG
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $progresos->links() }}
            </div>
        </div>
        
        
    </div>

    <div class="flex flex-col align-middle justify-center ml-14">
        <h2 class="text-xl font-bold">Registra tu progreso</h2>
        <form action="{{route('medidas.store')}}" method="post" class="space-y-4">
            @csrf 
            <input type="hidden" name="idUser" value="{{auth()->user()->id}}">
            <div class="mb-4">
                <label for="fecha" class="block">Fecha:</label>
                <input type="date" id="fecha" name="fecha" class=" px-4 py-2 border rounded-md w-1/4">
            </div>
            <div class="mb-4 ">
                <label for="peso" class="block">Peso:</label>
                <input type="number" id="peso" name="peso" class=" px-4 py-2 border rounded-md w-1/4">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Guardar</button>
        </form>
    </div>
    
</section>

@endsection