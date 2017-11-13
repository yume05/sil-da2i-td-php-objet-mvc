<?php
include './connect.php';
$req = mysqli_query($link, 'SELECT * FROM film WHERE id = 1;');
$row1 = mysqli_fetch_array($req, MYSQL_ASSOC);
$req1 = mysqli_query($link, 'SELECT * FROM personne INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "acteur" AND film_has_personne.id_film = 1;');
$req4 = mysqli_query($link, 'SELECT MONTH(birthday) AS "mois", DAY(birthday) AS "jour", YEAR(birthday) AS "annee", legende, nom, prenom, chemin, role, biographie, birthday FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "realisateur" AND film_has_personne.id_film = 1;');
$req5 = mysqli_query($link, 'SELECT titre, datesortie FROM film INNER JOIN film_has_personne ON film.id = film_has_personne.id_film WHERE role = "realisateur" AND film_has_personne.id_personne = 1;');
$row4 = mysqli_fetch_array($req4, MYSQL_ASSOC);
?>
<!doctype html>
<html>
<title>TD 1</title>

<link rel="stylesheet" href="./style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body><header>
		<ul id="navigation">
			<li> <a href="./index.php">Accueil</a></li>
			<li> <a href="./realisateur.php">Réalisateur</a></li>
			<li> <a href="./acteurs.php">Acteurs</a></li>
		</ul>
	</header>