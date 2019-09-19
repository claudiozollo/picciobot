<?php

if($msg == "/start") {
	sm($chatID, "Funziono!
	Ora modifica il file comandi.php");
}

if($msg == "/mena"){
	sm($chatID, "Devi specificare a quale utente cosi : /picchia nomeutente");
}
if($msg == "/mena" && $replyID){
	
	$utenti = array($name, $replyNome);

	// Utilizzo la funzione array_rand per estrarre a caso uno degli elementi della array
	$n = array_rand($utenti, 1);

	sm($chatID, "Dopo un duro scontro il vincitore è : ".$n);
}


//altri comandi