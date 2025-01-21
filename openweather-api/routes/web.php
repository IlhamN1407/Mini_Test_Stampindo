<?php

use App\Http\Controllers\OpenWeatherAPI;
use Illuminate\Support\Facades\Route;

Route::get('/', [OpenWeatherAPI::class, 'getAPI']);
