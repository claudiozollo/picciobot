<?php

function sm($chatID, $text, $web = true) {
global $api;
/*
Esempio:
sm($chatID, "Messaggio");
   ChatID Messaggio da inviare
   
sm($chatID, "Messaggio", false);
   ChatID   Messaggio   Anteprima link  
*/
file_get_contents('https://api.telegram.org/'.$api.'/sendMessage?chat_id='.$chatID.'&parse_mode=HTML&text='.urlencode($text).'&disable_web_page_preview='.$web);  
}

function sendphoto($chatID, $photo, $caption) {
global $api;
/*
Esempio:
sendphoto($chatID, 34343fJDd883, "Questa è una foto");
          ChatID      file_id    Commento della foto
*/
file_get_contents('https://api.telegram.org/'.$api.'/sendPhoto?chat_id='.$chatID.'&photo='.$photo.'&caption='.urlencode($caption));  
}

function si($chatID, $img, $caption)
/*
Esempio:
si($chatID, "http://www.tuttosuigatti.it/files/styles/full_width/public/images/featured/86/soriano-gatto-europeo.jpg", "Questo è un test");
    ChatID                              Link della foto                                                                Commento della foto
*/
{
global $api;
global $userID;
global $update;


if(strpos($img, "."))
{
$img = str_replace("index.php","",$_SERVER['SCRIPT_URI']).$img;
}
file_get_contents('https://api.telegram.org/'.$api.'/sendPhoto?chat_id='.$chatID.'&photo='.$img.'&caption='.urlencode($caption)); 
}

function sendaudio($chatID, $audio, $caption) {
global $api;
/*
Esempio:
sendphoto($chatID, 34343fJDd883, "Questo è un audio");
          ChatID      file_id    Commento del audio
*/
file_get_contents('https://api.telegram.org/'.$api.'/sendAudio?chat_id='.$chatID.'&audio='.$audio.'&caption='.urlencode($caption));  
}

function sendvoice($chatID, $voice, $caption) {
global $api;
/*
Esempio:
sendphoto($chatID, 34343fJDd883, "Questo è un vocale");
          ChatID      file_id    Commento del vocale
*/
file_get_contents('https://api.telegram.org/'.$api.'/sendVoice?chat_id='.$chatID.'&voice='.$voice.'&caption='.urlencode($caption));  
}

function delmsg($chatID, $messageID) {
global $api;
/*
Esempio:
delmsg($chatID, $messageID);
     ChatID    Id messaggio
*/
file_get_contents('https://api.telegram.org/'.$api.'/deleteMessage?chat_id='.$chatID.'&message_id='.$messageID);  
}

function ban($chatID, $userID) {
global $api;
/*
Esempio:
ban($chatID, $userID);
     ChatID   UserID
*/
file_get_contents('https://api.telegram.org/'.$api.'/KickChatMember?chat_id='.$chatID.'&user_id='.$userID);  
}

function tempban($chatID, $userID, $date) {
global $api;
/*
Esempio:
tempban($chatID, $userID, "24 april 2018");
       ChatID   UserID   Fino a quanto
*/
file_get_contents('https://api.telegram.org/'.$api.'/KickChatMember?chat_id='.$chatID.'&user_id='.$userID.'&until_date='.urlencode($date));  
}

function unban($chatID, $userID) {
global $api;
/*
Esempio:
unban($chatID, $userID);
       ChatID   UserID
*/
file_get_contents('https://api.telegram.org/'.$api.'/UnbanChatMember?chat_id='.$chatID.'&user_id='.$userID);  
}

function restrict($chatID, $userID, $message, $media, $othermessage, $webpreview) {
global $api;
/*
Esempio:
restrict($chatID, $userID, false, false, false, false);
         ChatID   UserID  Messaggi Media Altro   Link
*/
file_get_contents('https://api.telegram.org/'.$api.'/restrictChatMember?chat_id='.$chatID.'&user_id='.$userID.'&can_send_messages='.$message.'&can_send_media_messages='.$media.$message.'&can_send_other_messages='.$othermessage.'&can_send_other_messages='.$othermessage.'&can_add_web_page_previews='.$webpreview);  
}

function temprestrict($chatID, $userID, $date, $message, $media, $othermessage, $webpreview) {
global $api;
/*
Esempio:
temprestrict($chatID, $userID, "24 april 2018", false, false, false, false);
             ChatID    UserID   Fino a quanto  Messaggi Media Altro   Link
*/
file_get_contents('https://api.telegram.org/'.$api.'/promoteChatMember?chat_id='.$chatID.'&user_id='.$userID.'&until_date='.urlencode($date).'&can_send_messages='.$message.'&can_send_media_messages='.$media.$message.'&can_send_other_messages='.$othermessage.'&can_send_other_messages='.$othermessage.'&can_add_web_page_previews='.$webpreview);  
}

function promote($chatID, $userID, $info, $postmessage, $editmessage, $deletemessage, $inviteusers, $restrict, $pinmessage, $promote) {
global $api;
/*
Esempio:
promote($chatID, $userID, false, false, false, false, false, false, false, false);
         ChatID   UserID    1      2      3      4      5      6      7      8

1= Può cambiare le info
2= Può postare messaggi
3= Può modificare i messaggi
4= Può eliminare i messaggi
5= Può invitare utenti
6= Può limitare utenti
7= Può fissare messaggi
8= Può mettere admin utenti
*/
file_get_contents('https://api.telegram.org/'.$api.'/UnbanChatMember?chat_id='.$chatID.'&user_id='.$userID.'&can_change_info='.$info.'&can_change_info='.$info.'&can_post_messages='.$postmessage.'&can_edit_messages='.$editmessage.'&can_delete_messages='.$deletemessage.'&can_invite_users='.$inviteusers.'&can_restrict_members='.$restrict.'&can_pin_messages='.$pinmessage.'&can_promote_members='.$promote);  
}

function getlink($chatID) {
global $api;
/*
Esempio:
getlink($chatID);
Può essere espresso anche @gruppo o @canale.
*/
return json_decode(file_get_contents('https://api.telegram.org/'.$api.'/exportChatInviteLink?chat_id='.$chatID),true)['result'];
}

function setphoto($chatID, $photo) {
global $api;
/*
Esempio:
setphoto($chatID, "xJiduhdHDODudK7edJd");
          ChatID        file_id
*/
file_get_contents('https://api.telegram.org/'.$api.'/setChatPhoto?chat_id='.$chatID.'&photo='.$photo);  
}

function delphoto($chatID, $photo) {
global $api;
/*
Esempio:
delphoto($chatID);
Può essere espresso anche @gruppo o @canale.
*/
file_get_contents('https://api.telegram.org/'.$api.'/deleteChatPhoto?chat_id='.$chatID);  
}

function titleset($chatID, $title) {
global $api;
/*
Esempio:
titleset($chatID, "Nuovo titolo");
*/
file_get_contents('https://api.telegram.org/'.$api.'/setChatTitle?chat_id='.$chatID.'&title='.urlencode($title));
}

function setdescription($chatID, $description) {
global $api;
/*
Esempio:
setdescription($chatID, "Descrizione");
È possibile usare anche i tag html.
*/
file_get_contents('https://api.telegram.org/'.$api.'/setChatDescription?chat_id='.$chatID.'&parse_mode=HTML'.'&title='.urlencode($description));
}

function pin($chatID, $messageID) {
global $api;
/*
Esempio:
pin($chatID, "224433");
    ChatID  ID messaggio
*/
file_get_contents('https://api.telegram.org/'.$api.'/pinChatMessage?chat_id='.$chatID.'&message_id='.$messageID);
}

function unpin($chatID) {
global $api;
/*
Esempio:
unpin($chatID);
Può essere espresso anche @gruppo o @canale.
*/
file_get_contents('https://api.telegram.org/'.$api.'/unpinChatMessage?chat_id='.$chatID);
}

function leave($chatID) {
global $api;
/*
Esempio:
leave($chatID);
Può essere espresso anche @gruppo o @canale.
*/
file_get_contents('https://api.telegram.org/'.$api.'/leaveChat?chat_id='.$chatID);
}

function getchat($chatID) {
global $api;
/*
Esempio:
getchat($chatID);
Può essere espresso anche @gruppo o @canale.
*/
file_get_contents('https://api.telegram.org/'.$api.'/getChat?chat_id='.$chatID);
}

function getadmin($chatID) {
global $api;
/*
Esempio:
$variabile = getadmin($chatID);

La variabile sarà un array, per visualizzarli tutti segui questo esempio:

foreach($variabile as $var) {
$staff = $staff.$var.'<br>';
}

sm($chatID, $staff);
*/
return json_decode(file_get_contents('https://api.telegram.org/'.$api.'/getChatAdministrators?chat_id='.$chatID),true)['result'];
}

function getmembers($chatID) {
global $api;
/*
Esempio:
$membri = getmembers($chatID);
Il ChatID può essere espresso anche @gruppo o @canale.
*/
return json_decode(file_get_contents('https://api.telegram.org/'.$api.'/getChatMembersCount?chat_id='.$chatID),true)['result'];
}

function editmessage($chatID, $messageID, $text, $web = true) {
global $api;
/*
Esempio:
editmessage($ChatID, 45423, "Nuovo testo");
            ChatID ID Messaggio Nuovo testo
*/
file_get_contents('https://api.telegram.org/'.$api.'/editMessageText?chat_id='.$chatID.'message_id='.$messageID.'&parse_mode=HTML&text='.urlencode($text).'&disable_web_page_preview='.$web);
}

function itastiera($chatID, $text, $menu) {
global $api;

/*
Esempio:

$menu = '[[{
      "text": "Avvia",
      "callback_data": "/test"}, {
      "text": "Avvia2",
      "callback_data": "start2"}]]';
itastiera($chatID, "Avvia tutto", $menu);
           ChatID   Messaggio da inviare
*/
file_get_contents('https://api.telegram.org/'.$api.'/sendMessage?chat_id='.$chatID.'&parse_mode=HTML&text='.urlencode($text).'&reply_markup={"inline_keyboard":'.urlencode($menu).'}');
}

function cbreply($notify, $text, $web = true) {
global $api;
global $cbid;
global $cbmsg;
global $cbchat;
/*
Esempio:
cbreply("Notifica", "NuovoTesto");

cbreply("Notifica", "NuovoTesto", false);
                                 Blocca link

*/
file_get_contents('https://api.telegram.org/'.$api.'/answerCallbackQuery?callback_query_id='.$cbid.'&text='.urlencode($notify));
file_get_contents('https://api.telegram.org/'.$api.'/editMessageText?chat_id='.$cbchat.'&message_id='.$cbmsg.'&parse_mode=HTML&text='.urlencode($text).'&disable_web_page_preview='.$web);
}

function icbreply($notify, $text, $menu) {
global $api;
global $cbid;
global $cbmsg;
global $cbchat;
/*
Esempio:
icbreply("Notifica", "NuovoTesto", $menu);
*/
file_get_contents('https://api.telegram.org/'.$api.'/answerCallbackQuery?callback_query_id='.$cbid.'&text='.urlencode($notify));
file_get_contents('https://api.telegram.org/'.$api.'/editMessageText?chat_id='.$cbchat.'&message_id='.$cbmsg.'&parse_mode=HTML&text='.urlencode($text).'&reply_markup={"inline_keyboard":'.urlencode($menu).'}');
}