<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>AquaForce</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-50 leading-tight">
            {{ __('AquaForce') }}
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="text-2xl">
                        ¡Transforma la Gestión del Agua en Tu Hogar o Negocio!
                        </div>
                    </div>
                    <div class="flex p-6">
                        <div class="w-full sm:w-1/2 pr-4">
                            <div class="content">
                            En AquaForce, estamos dedicados a ofrecerte una solución innovadora para el monitoreo y control de la calidad del agua. Nuestro sistema avanzado utiliza tecnología de punta para asegurarte que el agua que usas esté siempre en óptimas condiciones.
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2">
                            <img src="{{ asset('images/prototype.jpeg') }}" alt="" class="w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="text-2xl">¿Qué ofrecemos?</div>
            </div>
            <div class="mt-6">
                <!-- Content Sections -->
                <div id="content-1" class="content-item">
                    <h2 class="content text-xl font-semibold">Monitoreo en Tiempo Real</h2>
                    <p class="content">Utiliza nuestros sensores de temperatura y turbidez para verificar la calidad del agua en cualquier momento. Consulta datos precisos y actualizados directamente desde nuestra plataforma.</p>
                </div>
                <div id="content-2" class="content-item hidden">
                    <h2 class="content text-xl font-semibold">Control de Compotas a Distancia</h2>
                    <p class="content">Con AquaForce, puedes abrir o cerrar compuertas con solo un clic. Mantén el agua limpia y gestionada eficientemente desde la comodidad de tu dispositivo móvil o computadora.</p>
                </div>
                <div id="content-3" class="content-item hidden">
                    <h2 class="content text-xl font-semibold">Visualización Clara</h2>
                    <p class="content">Disfruta de gráficos y tablas fáciles de entender que muestran la evolución de la calidad del agua a lo largo del tiempo.</p>
                </div>
            </div>
            <!-- Navigation Buttons -->
            <div class="flex justify-center mt-6 mb-4">
                <button class="px-4 py-2 mx-1 border rounded nav-button" data-content-id="1">1</button>
                <button class="px-4 py-2 mx-1 border rounded nav-button" data-content-id="2">2</button>
                <button class="px-4 py-2 mx-1 border rounded nav-button" data-content-id="3">3</button>
            </div>
        </div>
    </div>
</div>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="text-2xl">¿Por Qué Elegir AquaForce?</div>
            </div>
            <div class="mt-4">
                <!-- Content Sections -->
                <div id="content-4" class="content">
                    <h2 class="content text-xl font-semibold">Tecnología de Vanguardia</h2>
                    <p class="content">Nuestro sistema utiliza ESP32 y sensores avanzados para ofrecerte datos precisos y fiables.</p>
                </div>
                <div id="content-5" class="content hidden">
                    <h2 class="content text-xl font-semibold">Fácil de Usar</h2>
                    <p class="content">Una interfaz amigable y accesible para todos los usuarios, sin complicaciones.</p>
                </div>
                <div id="content-6" class="content hidden">
                    <h2 class="content text-xl font-semibold">Flexibilidad y Control</h2>
                    <p class="content">Personaliza el comportamiento de los dispositivos según tus necesidades específicas.</p>
                </div>
            </div>
            <!-- Navigation Buttons -->
            <div class="flex justify-center mt-6 mb-4">
                <button id="show-more-btn" class="px-4 py-2 mx-1 nav-button" data-content-id="5">
                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="">
                    <div class="flex p-6">
                        <div class="">
                            <div class="content text-2xl bold text-gray-50 flex justify-center items-center">
                            ¡Comienza Hoy Mismo!
                            </div>
                            <div class="content text-gray-50">
                            Únete a la revolución en el control de la calidad del agua. Regístrate ahora y empieza a disfrutar de todos los beneficios que AquaForce tiene para ofrecerte.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</x-app-layout>
</body>
</html>
