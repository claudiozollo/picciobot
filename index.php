<?php

echo 'FDBots Software<br>Versione: 1.3.0';

/*
Created by @FDBots
Lancia il file update.php per aggiornarmi!
*/

//Non toccare qui
$api = $_GET['api'];
$content = file_get_contents("php://input");
$update = json_decode($content, true);
/////////////////////////////////////////////


///////////////////// Parte da api.telegram.org //////////////////////////

//Variabili

//Gruppi e chat
$msg = $update["message"]["text"];
$chatID = $update["message"]["chat"]["id"];
$chatType = $update["message"]["chat"]["type"];
$title = $update["message"]["chat"]["title"];
$chatusername = $update["message"]["chat"]["username"];
$chatpic = $update["message"]["chat"]["photo"];
$description = $update["message"]["chat"]["description"];
$chatlink = $update["message"]["chat"]["invite_link"];
$messageID = $update["message"]["message_id"];
$messageDate = $update["message"]["date"];
$editDate = $update["message"]["edit_date"];
$pinned = $update["message"]["pinned_message"];

$userID = $update["message"]["from"]["id"];
$name = $update["message"]["from"]["first_name"];
$surname = $update["message"]["from"]["last_name"];
$username = $update["message"]["from"]["username"];
$userpic = $update["message"]["from"]["photo"];

//Canali
$post = $update["channel_post"]["text"];
$channelID = $update["channel_post"]["chat"]["id"];
$channelTitle = $update["channel_post"]["chat"]["title"];
$channelUsername = $update["channel_post"]["chat"]["username"];
$channelPic = $update["channel_post"]["chat"]["photo"];
$ChannelDescription = $update["channel_post"]["chat"]["description"];
$channelLink = $update["channel_post"]["chat"]["invite_link"];
$postID = $update["channel_post"]["message_id"];
$postDate = $update["channel_post"]["date"];
$editPostDate = $update["channel_post"]["edit_date"];

$chUserID = $update["channel_post"]["from"]["id"];
$chName = $update["channel_post"]["from"]["first_name"];
$chSurname = $update["channel_post"]["from"]["last_name"];
$chUsername = $update["channel_post"]["from"]["username"];
$chUserpic = $update["channel_post"]["from"]["photo"];

//Callback
$cbfirst = $update["callback_query"]["from"]["first_name"];
$cbdata = $update["callback_query"]["data"];
$cbmsg = $update["callback_query"]["message"]['message_id'];
$cbchat = $update['callback_query']["message"]['chat']['id'];
$cbid = $update["callback_query"]["id"];

$replyID = $update["message"]["reply_to_message"]["from"]["id"];
$replyNome = $update["message"]["reply_to_message"]["from"]["first_name"];
$replyUsername = $update["message"]["reply_to_message"]["from"]["username"];
$ReplyMessageID = $update["message"]["reply_to_message"]["message_id"];
$replyText = $update["message"]["reply_to_message"]["text"];

include('funzioni.php');

///////////////////////////////////////////////////////////////////////////

include('comandi.php');
