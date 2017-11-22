<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require __DIR__ . '/config.php';
require __DIR__ . '/vendor/autoload.php';

use Telegram\Bot\Api;
use Medoo\Medoo;

$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => DB_NAME,
    'server' => DB_HOST,
    'username' => DB_USER,
    'password' => DB_PASS
        ]);
$telegram = new Api(TELEGRAM_KEY);
//var_dump($telegram->getMe());
//var_dump( $telegram->getUpdates() );

$db->insert('chat_list', [
    'user_id' => 2,
    'chat_id' => 3,
    'status'  => 0,
    'create_time' => time()
]);
echo $db->id();
//
//
//$keyboard = [
//        ['7', '8', '9'],
//        ['4', '5', '6'],
//        ['1', '2', '3'],
//        ['0']
//];
//
//$reply_markup = $telegram->replyKeyboardMarkup([
//    'keyboard' => $keyboard,
//    'resize_keyboard' => true,
//    'one_time_keyboard' => true
//        ]);
//
//$response = $telegram->sendMessage([
//    'chat_id' => '93442030',
//    'text' => 'Hello World',
//    'reply_markup' => $reply_markup
//        ]);
//
//$messageId = $response->getMessageId();
