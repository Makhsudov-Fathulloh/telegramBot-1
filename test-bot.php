<?php

include 'Telegram.php';

$telegram = new Telegram('5706853600:AAFXXJOE5irSzyZ2SJ1xClzDSGn4t-rlxOY');

$chat_id = $telegram->ChatID();
$text = $telegram->Text();

if ($text == "/start") {
    $option = array(
        //First row
        array($telegram->buildKeyboardButton("Button 1")),
        //Second row
        array($telegram->buildKeyboardButton("Button 2"),  $telegram->buildKeyboardButton("Button 3")),
        //Third row
        array($telegram->buildKeyboardButton("Biz haqimizda 🙂"))
       );
    $keyb = $telegram->buildKeyBoard($option, $onetime=false, $resize=true);

    $content = array('chat_id' => $chat_id, 'text' => 'Assalamu alaykum! test_prog botiga xush kelibsiz');
    $telegram->sendMessage($content);

    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text' => "Iltimos kerakli bolimni tanlang");

    $telegram->sendMessage($content);
}