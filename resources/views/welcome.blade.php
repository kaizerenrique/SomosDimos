<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <!-- Seccion de barra de navegacion -->
    <section>
        <div class="relative bg-white">
            <!-- Seccion para PC -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
                    <!-- Logo -->
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <a href="#">
                            <span class="sr-only">SomosDimos</span>
                            <img class="h-8 w-auto sm:h-10" src="{{asset('/storage/imgplantilla/logo_400x400.jpg')}}" alt="">
                        </a>
                    </div><!-- Fin Logo -->
                    <!-- boton menu movil -->
                    <div class="-mr-2 -my-2 md:hidden">
                        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                            <span class="sr-only">Open menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div><!-- Fin boton menu movil -->
                    <!-- menu -->
                    <nav class="hidden md:flex space-x-10">
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Pricing </a>
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Docs </a>                        
                    </nav><!-- Fin menu -->
                    <!-- Botones de secion -->
                    <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                        @if (Route::has('login'))
                            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                                @auth            
                                  <li class="mr-3">
                                    <a class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700" href="{{ url('/dashboard') }}">Dashboard</a>
                                  </li>
                                @else                              
                                  <li class="mr-3">
                                    <a class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900" href="{{ route('login') }}">Iniciar sesión</a>
                                  </li>
                                  @if (Route::has('register'))
                                  <li class="mr-3">
                                    <a class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700" href="{{ route('register') }}">Registrarse</a>
                                  </li>
                                  @endif
                                @endauth
                            </ul>
                        @endif
                    </div><!-- Fin Botones de secion -->
                </div>
            </div>
            <!--
                Menu Movil
            --> 
            <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                    <div class="pt-5 pb-6 px-5">
                        <div class="flex items-center justify-between">
                            <!-- Logo -->
                            <div>
                                <img class="h-8 w-auto" src="{{asset('/storage/imgplantilla/logo_400x400.jpg')}}" alt="SomosDimos">
                            </div><!-- Fin Logo -->
                            <div class="-mr-2">
                                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6">
                            
                        </div>
                    </div>
                    <div class="py-6 px-5 space-y-6">
                        <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Pricing </a>
                            <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Docs </a>
                        </div>
                        <div>
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">Dashboard</a>
                                @else
                                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                                        ¿Ya estás registrado?
                                        <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-500">Iniciar sesión</a>
                                    </p>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"> Registrarse </a> 
                                @endif
                                @endauth

                            @endif              
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </section><!-- Fin Seccion de barra de navegacion -->
</body>
</html>
