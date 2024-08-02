<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Devices</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-50 leading-tight">
            {{ __('Configuración de ') }} {{ $device->device_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table>
                    <thead class="min-w-full divide-y divide-gray-200">
                    <tr class="px-6 py-3 bg-gray-50">
                        <th class="px-6 py-3 bg-gray-50">Nombre</th>
                        <th class="px-6 py-3 bg-gray-50">Número Serial</th>
                        <th class="px-6 py-3 bg-gray-50">Estado</th>
                        <th class="px-6 py-3 bg-gray-50">Descripción</th>
                        <th class="px-6 py-3 bg-gray-50">Fecha de Instalación</th>
                        <th class="px-6 py-3 bg-gray-50">Última actualización</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>
