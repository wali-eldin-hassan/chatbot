<?php

use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;

$botman = resolve('botman');

$botman->fallback(function ($bot) {
    $userMessage = $bot->getMessage()->getText();

    $bot->reply("Sorry, I didn't understand: \"$userMessage\". You can ask me about the weather by saying, for example: 'weather in paris'. you can also attach images");
});

$botman->hears('weather in {location}', function ($bot, $location) {
    $url = config('app.weather_url');

    $key = config('app.weather_key');

    $weather = file_get_contents($url . '?q=' . urlencode($location) . '&APPID=' . $key);

    $weather = json_decode($weather, true);

    $bot->reply('The weather in ' . $location . ' is currently ' . $weather['weather'][0]['description'] . '. The temperature is ' . $weather['main']['temp'] . '°C.');

    $bot->reply('you entered : ' . $location);
});


$botman->hears('my name is {name}', function ($bot, $name) {

    $bot->userStorage()->save(['name' => $name]);

    $bot->reply('Nice to meet you ' . $name);
});

$botman->hears('say my name', function ($bot) {

    $name = $bot->userStorage()->get('name');

    $bot->reply('your name is' . ' ' . $name);
});

$botman->receivesImages(function ($bot, $images) {
    $image = $images[0];
    $bot->reply(OutgoingMessage::create('i received your image')->withAttachment($image));
});