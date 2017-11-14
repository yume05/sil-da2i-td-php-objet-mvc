<!doctype html>
<html>
<title>TD 1</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="./style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
	<?php include "./header.php"; ?>
	<section  id="main">
	<?php 
	if(isset($_GET['idact']) && isset($_GET['idfilm'])){
		echo "<a href='film.php?idfilm=".$_GET['idfilm']."'><button>Retour</button></a>";
		$req4 = mysqli_query($link, 'SELECT MONTH(birthday) AS "mois", DAY(birthday) AS "jour", YEAR(birthday) AS "annee", legende, nom, prenom, chemin, role, biographie, birthday FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE film_has_personne.id_personne = '.$_GET['idact'].';');
		$row4 = mysqli_fetch_array($req4, MYSQL_ASSOC); 
		?>
		<article>
				<p><h1><b>Acteur</b></h1></p>
		</article>
		<?php include "./infopersonnes.php"; 
		}?>
	<?php 
	if(isset($_GET['id'])){
		$req4 = mysqli_query($link, 'SELECT MONTH(birthday) AS "mois", DAY(birthday) AS "jour", YEAR(birthday) AS "annee", legende, nom, prenom, chemin, role, biographie, birthday FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE film_has_personne.id_personne = '.$_GET['id'].';');
		$row4 = mysqli_fetch_array($req4, MYSQL_ASSOC); 
		?>
		<article>
				<p><h1><b>Acteur</b></h1></p>
		</article>
		<?php include "./infopersonnes.php"; 
		}?>
		</section>
		<?php include "./footer.php"; ?>
	</body>
	</html>
