<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require __DIR__.'/vendor/autoload.php';

use Telegram\Bot\Api;

$telegram = new Api('152924976:AAE5uhhZvzlWzPuVPEyvWE0UYfbn6ylfXQs');
//var_dump($telegram->getMe());
//var_dump( $telegram->getUpdates() );

$keyboard = [
    ['7', '8', '9'],
    ['4', '5', '6'],
    ['1', '2', '3'],
         ['0']
];

$reply_markup = $telegram->replyKeyboardMarkup([
	'keyboard' => $keyboard, 
	'resize_keyboard' => true, 
	'one_time_keyboard' => true
]);

$response = $telegram->sendMessage([
	'chat_id' => '93442030', 
	'text' => 'Hello World', 
	'reply_markup' => $reply_markup
]);

$messageId = $response->getMessageId();