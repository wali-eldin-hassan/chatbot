<?php

$botman = resolve('botman');

$botman->hears('weather in {location}', function ($bot, $location) {
    $weather = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$location.'&appid=3772f1f9a8f0f22e8ce65ca9535cad3f');
    $weather = json_decode($weather, true);
    $bot->reply('The weather in ' . $location .' is currently '. $weather['weather'][0]['description']. '. The temperature is '. $weather['main']['temp']. '°C.');
    $bot->reply('you entered : ' . $location);
});
//$botman->hears('Start conversation', BotManController::class.'@startConversation');
