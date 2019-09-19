<html>
<center>
<br><br><br><br><br><br><br><br><br>
<?php
if(!isset($_GET['continua'])) {
	$x = filesize('funzioni.php');
	$x2 = filesize('index.php');

	$info = json_decode(file_get_contents('http://zmaurizio00.altervista.org/Server/versione.php'), TRUE);
	
	$modificati = '';

	if($x != $info['funzioni_size']) {
	$modificati = 'funzioni.php';
	}

	if($x2 != $info["index_size"]) {
		if($modificati == '') {
		$modificati = 'index.php';
		}else{
		$modificati = $modificati.'<br>index.php';
		}
	}

	if($modificati != '') {
	echo '<h2>I seguenti file verranno sovrascritti</h2>'.$modificati.'<br><h3>Sei sicuro di voler proseguire?</h3><a href="update.php?continua=si">Continua</a> &nbsp; <a href="update.php?continua=no">Annulla</a>';
	}
	else {
	echo '<h2>Nessun aggiornamento disponibile</h2>';
	}
}
else if(isset($_GET['continua']) and $_GET['continua'] == "si") {
//Aggiorna

$info = json_decode(file_get_contents('http://zmaurizio00.altervista.org/Server/versione.php'), TRUE);
$versione = $info["version"];

if($versione == "") {
echo '<h2>Impossibile aggiornare il software</h2><br><h3>Sicuro di aver consentito i link esterni?</h3>';
}

else {

if($x != $info['funzioni_size']) {
	$modificati = 'funzioni';
	}

	if($x2 != $info["index_size"]) {
		if($modificati == '') {
		$modificati = 'index';
		}
		else{
		$modificati = $modificati.'<br>index';
		}
	}

$e = explode('<br>', $modificati);

foreach($e as $file) {


$ei = file_get_contents('http://zmaurizio00.altervista.org/Server/'.$file.'.txt');
$andavabene = fopen($file.'.php', 'w');
fwrite($andavabene, $ei);
fclose($andavabene);

}

echo '<h2>Aggiornamento alla '.$versione.' riuscito!</h2>';
}
}
else{ 
//Non aggiornare

echo '<h2>Operazione annullata</h2>';

}
?>
</center>
</html>