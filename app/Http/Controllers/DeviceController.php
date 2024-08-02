<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Device;

class DeviceController extends Controller
{
    public function index()
    {
        // Retrieve the currently authenticated user
        $user = Auth::user();

        // Retrieve the devices owned by the user
        $devices = Device::where('user_id', $user->id)->get();

        // Pass the devices to the view
        return view('devices.show', compact('devices'));
    }
    public function showConfig($device_id)
    {
        // Retrieve the device configuration using the device ID
        $device = Device::where('device_id', $device_id)->first();

        // Check if the device exists
        if (!$device) {
            return redirect()->route('devices.index')->with('error', 'Dispositivo no encontrado.');
        }

        // Pass the device configuration to the view
        return view('devices.config', ['device' => $device]);
    }
}