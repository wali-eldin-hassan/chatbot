<?php

$botman = resolve('botman');

$botman->hears('weather in {location}', function ($bot, $location) {
    $url = config('app.weather_url');

    $key = config('app.weather_key');

    $weather = file_get_contents($url . '?q=' . urlencode($location) . '&APPID=' . $key);

    $weather = json_decode($weather, true);

    $bot->reply('The weather in ' . $location . ' is currently ' . $weather['weather'][0]['description'] . '. The temperature is ' . $weather['main']['temp'] . '°C.');

    $bot->reply('you entered : ' . $location);
});
