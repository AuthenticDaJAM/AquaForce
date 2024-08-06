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
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">
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
                    <tbody>
                        <tr>
                            <td class="px-6 py-4 text-center overflow-hidden" style="width: 141px; height: 70px;">{{ $device->device_name }}</td>
                            <td class="px-6 py-4 text-center" style="width: 160px;">{{ $device->device_id }}</td>
                            @if ($device->status == 1)
                                <td class="px-2 py-1 bg-green-500 text-white text-center rounded">Activo</td>
                            @else
                                <td class="px-2 py-1 bg-red-500 text-white text-center rounded">Inactivo</td>
                            @endif
                            <td class="px-6 py-4 text-center overflow-hidden" style="width: 380px; height: 70px;">{{ $device->description }}</td>
                            <td class="px-6 py-4 text-center" style="width: 198px;">{{ $device->instalation_date }}</td>
                            <td class="px-6 py-4 text-center" style="width: 211px;">{{ $device->last_updated }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($feeds->isEmpty())
                    <p>No Data</p>
                @else
                @php
                    $feed = $feeds->last();
                @endphp
                    <table class="w-full border-collapse border border-gray-300">
                        <tr>
                            <td rowspan="2" class="w-1/2 border border-gray-300 p-4">
                                <div class="bg-gray-200 font-bold p-2">Turbidez (ppm)</div>
                                <div class="mt-2">{{ $feed['field3'] }}</div>
                                <div class="bg-gray-200 font-bold p-2 mt-4">Temperatura (°C)</div>
                                <div class="mt-2">{{ $feed['field2'] }}</div>
                            </td>
                            <td class="border border-gray-300 p-1 bg-gray-200 font-bold text-center">Calidad general del agua</td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 p-4 text-center">{{ $feed['field4'] }}</td>
                        </tr>
                        <tr>
                            <div class="bg-gray-200 font-bold p-2">
                                Última actualización: {{ \Carbon\Carbon::parse($feed['created_at'])->timezone('America/Mexico_City')->format('Y-m-d H:i:s') }}
                            </div>
                        </tr>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>
