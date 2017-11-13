<?php
// on se connecte à example.com et au port 3307
$link = mysqli_connect('localhost', 'phpmyadmin', 'ini01', 'projet_film_lp');
	
mysqli_set_charset($link, "utf8");
if (!$link) {
    die('Connexion impossible : ' . mysqli_error());
}


function datetomonth($month){
	if($month == 1){
		$monthtext = 'janvier';
	}
	if($month == 2){
		$monthtext = 'février';
	}
	if($month == 3){
		$monthtext = 'mars';
	}
	if($month == 4){
		$monthtext = 'avril';
	}
	if($month == 5){
		$monthtext = 'mai';
	}
	if($month == 6){
		$monthtext = 'juin';
	}
	if($month == 7){
		$monthtext = 'juillet';
	}
	if($month == 8){
		$monthtext = 'août';
	}
	if($month == 9){
		$monthtext = 'septembre';
	}
	if($month == 10){
		$monthtext = 'octobre';
	}
	if($month == 11){
		$monthtext = 'novembre';
	}
	if($month == 12){
		$monthtext = 'décembre';
	}

	return $monthtext;
}


?>