<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi|Hello|مرحبا|السلام عليكم', function ($bot) {
    $bot->reply('Hello!');
});
//$botman->hears('Start conversation', BotManController::class.'@startConversation');
