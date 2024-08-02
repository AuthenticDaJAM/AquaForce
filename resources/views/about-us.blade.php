<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Sobre nosotros</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-50 leading-tight">
            {{ __('Sobre Nosotros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-2xl">
                        Historia del Proyecto
                    </div>
                </div>
                <div class="content">AquaForce nació como un proyecto escolar impulsado por la necesidad de enfrentar un problema real en nuestra comunidad. Durante la severa sequía que afectó a Monterrey, nos dimos cuenta de que muchas personas acumulaban agua, pero no contaban con los medios para verificar su calidad. Así, surgió la idea de AquaForce: un sistema diseñado para ayudar a las familias a controlar y administrar el agua de manera eficiente, asegurando que sea segura para su uso.</div>
            </div>
        </div>
    </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex p-6 bg-white border-b border-gray-200">
                        <div class="flex justify-center items-center w-full sm:w-1/2 text-2xl">
                            Misión
                        </div>
                        <div class="flex justify-center items-center w-full sm:w-1/2 text-2xl">
                            Visión
                        </div>
                    </div>
                    <div class="flex p-6">
                        <div class="content w-full sm:w-1/2">
                            En AquaForce, nuestra misión es proporcionar a las familias una herramienta efectiva para monitorear la calidad del agua almacenada. Queremos que cada usuario pueda gestionar el agua de acuerdo con sus capacidades y necesidades, previniendo el consumo de agua de mala calidad y optimizando su uso para evitar problemas.
                        </div>
                        <div class="content w-full sm:w-1/2">
                            Nos envisionamos llevando AquaForce a todos los rincones donde el almacenamiento de agua sea necesario. Queremos que nuestro sistema sea una herramienta esencial para mantener la salud y seguridad de las instalaciones y de sus usuarios.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="text-2xl">Nuestros Objetivos</div>
            </div>
            <div class="mt-6">
                <!-- Content Sections -->
                <div id="content-1" class="content-item">
                    <div class="flex p-6">
                        <div class="w-full sm:w-1/2 pr-4">
                        <h2 class="content text-xl font-semibold">Seguridad del Agua</h2>
                            <div class="content">
                            Garantizar que las personas no consuman agua que pueda poner en riesgo su salud.
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2">
                            <img src="{{ asset('images/bad-water.jpg') }}" style="height:100%;" class="">
                        </div>
                    </div>
                </div>
                <div id="content-2" class="content-item hidden">
                    <h2 class="content text-xl font-semibold">Uso Eficiente</h2>
                    <p class="content">Asegurar que el agua se utilice de manera adecuada, evitando su desperdicio o uso inapropiado.</p>
                </div>
            </div>
            <!-- Navigation Buttons -->
            <div class="flex justify-center mt-6 mb-4">
                <button class="px-4 py-2 mx-1 border rounded nav-button" data-content-id="1">1</button>
                <button class="px-4 py-2 mx-1 border rounded nav-button" data-content-id="2">2</button>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        AquaForce
                    </div>
                </div>
                <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed urna tristique diam tristique efficitur nec ac purus. Nunc dignissim ornare urna eu dapibus. Quisque nec metus tempus quam consectetur consectetur. Praesent sollicitudin nulla vitae sem hendrerit placerat. Vestibulum a porta dui, ac faucibus urna. Morbi vehicula dolor at est bibendum, vel vehicula odio fringilla. Donec feugiat laoreet feugiat. Nullam malesuada aliquam neque vitae sodales. Vivamus molestie eu turpis suscipit convallis. Duis ut pharetra nunc. Curabitur vestibulum porta urna non auctor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean facilisis lorem dui, non scelerisque purus ullamcorper sed. Nullam pellentesque nunc quis fermentum hendrerit. Praesent et erat sit amet dolor aliquet aliquet.</div>
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>
