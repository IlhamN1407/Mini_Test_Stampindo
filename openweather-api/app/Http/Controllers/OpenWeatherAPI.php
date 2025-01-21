<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OpenWeatherAPI extends Controller
{
    function getAPI()
    {
        $key = '7fda2b6737f15b2c6e4373fdc90ecd55';
        $lat = '-6.20';
        $lon = '106.81';
        $url = "api.openweathermap.org/data/2.5/forecast?lat={$lat}&lon={$lon}&appid={$key}&units=metric";

        try {
            $response = Http::get($url);
            $data = json_decode($response, true);
            $filtered = array_filter($data['list'], function ($v) {
                $currentDay = date('G:i:s', strtotime('00:00:00'));
                $apiDay = date('G:i:s', strtotime($v['dt_txt']));
                return $apiDay === $currentDay;
            });
            array_unshift($filtered, $data['list'][0]);
            return view('shows', ['WeatherData' => $filtered]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch weather data'], 500);
        }
    }
}
