<?php
$token = "938213190:AAHBvcVfWlL_mqLEEpBchQgsV7JxgVgwQcI"; //Il token da @BotFather
$sito = "https://picciobot.herokuapp.com/index.php"; //Il percorso dell'index

//////////////////////////////////// NON TOCCARE QUI ////////////////////////////////////////
$webhook = 'https://api.telegram.org/bot'.$token.'/setwebhook?url='.$sito.'?api=bot'.$token;
$ch = curl_init("$webhook");
curl_exec($ch);