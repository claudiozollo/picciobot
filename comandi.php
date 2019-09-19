<?php

if($msg == "/start" or $msg == "/start@picciobetabot") {
	sm($chatID, "Funziono!
	Ora baciatemi il culo");
}

if($msg == "/mena"){
	
	
	//se non c'è il nome in risposta
	if(!$replyNome){
		sm($chatID, "Devi rispondere ad un utente");
	}
	else{
	
		$utenti = array($name, $replyNome);

		// Utilizzo la funzione array_rand per estrarre a caso uno degli elementi della array
		$n = array_rand($utenti, 1);

		sm($chatID, "Dopo un duro scontro il vincitore è : ".$utenti[$n]);
	}
}


//altri comandi