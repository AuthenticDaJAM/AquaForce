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
            {{ __('Dispositivos de ') }} {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @if($devices->isEmpty())
            <div class="content">
                No tienes dispositivos, adquiere uno <div class="inline-flex rounded-md"><a href="">aquí</a></div>
            </div>
                @else
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50">Nombre</th>
                                <th class="px-6 py-3 bg-gray-50">Número Serial</th>
                                <th class="px-6 py-3 bg-gray-50">Estado</th>
                                <th class="px-6 py-3 bg-gray-50">Descripción</th>
                                <th class="px-6 py-3 bg-gray-50">Fecha de Instalación</th>
                                <th class="px-6 py-3 bg-gray-50">Última actualización</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($devices as $device)
                                <tr>
                                    <td class="px-6 py-4 text-center overflow-hidden" style="width: 141px; height: 70px;"><a href="{{ route('devices.config', $device->device_id) }}">{{ $device->device_name }}</a></td>
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
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>
