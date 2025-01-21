<html>
<title>Weather Forecast</title>

<body>
    {{-- @dump($WeatherData) --}}
    <h1>Weather Forecast :</h1>
    @foreach ($WeatherData as $item)
        <ul>
            <li>{{ date('D, j M Y', strtotime($item['dt_txt'])) }} : {{ $item['main']['temp'] }} &deg;C</li>
        </ul>
    @endforeach
</body>
</html>
