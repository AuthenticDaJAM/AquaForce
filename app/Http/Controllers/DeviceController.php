<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Device;
use GuzzleHttp\Client;


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

        $channelId = '2614699';
        $apiKey = '3VUBTGEHVK0ALTZG';

        // Check if the authenticated user is the owner of the device
        if ($device->user_id !== Auth::id()) {
            return redirect()->route('home');
        }

        // Create a Guzzle client
        $client = new Client();

        // Fetch data from ThingSpeak with SSL verification disabled
        $response = $client->get("https://api.thingspeak.com/channels/{$channelId}/feeds.json", [
            'verify' => false,
            'query' => [
                'api_key' => $apiKey,
            ]
        ]);

        // Decode the JSON response
        $data = json_decode($response->getBody(), true);

        // Extract the feed data and filter by device ID
        $feeds = collect($data['feeds'])->filter(function ($feed) use ($device_id) {
            return $feed['field1'] == $device_id;
        });

        // Pass the device configuration and ThingSpeak data to the view
        return view('devices.config', ['device' => $device, 'feeds' => $feeds]);
    }
}