<?php

if($msg == "/start" or $msg == "/start@picciobetabot") {
	sm($chatID, "Funziono!
	Ora baciatemi il culo");
}

if(strpos($stringa, '/mena') !== false){
	
	$text    = $msg;
	//$sender = $username;
	$sender = $replyUsername;
	
	//username validation
	$test = preg_match('/@[\w_]{5,}/', $text);
	if ($test === 0) {
		sm($chatID, $sender . " nessun utente trovato..";
	} else {
		$utenti = array($name, $replyNome);

		// Utilizzo la funzione array_rand per estrarre a caso uno degli elementi della array
		$n = array_rand($utenti, 1);

		sm($chatID, "Dopo un duro scontro il vincitore è : ".$utenti[$n]);
	}
		
}


//altri comandi