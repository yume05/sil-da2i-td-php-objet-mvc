<?php 
include "./header.php";
if(isset($_GET['idfilm'])){
	$idfilm = $_GET['idfilm'];
	$req  = mysqli_query($link, 'SELECT * FROM film WHERE id = '.$idfilm.';');
	$row1 = mysqli_fetch_array($req, MYSQL_ASSOC);
	$req1 = mysqli_query($link, 'SELECT * FROM personne INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "acteur" AND film_has_personne.id_film = '.$idfilm.';');
	$req4 = mysqli_query($link, 'SELECT MONTH(birthday) AS "mois", DAY(birthday) AS "jour", YEAR(birthday) AS "annee", legende, nom, prenom, chemin, role, biographie, birthday, id_film, personne.id AS "id_personne" FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "realisateur" AND film_has_personne.id_film = '.$_GET['idfilm'].';');
	$req5 = mysqli_query($link, 'SELECT titre, datesortie FROM film INNER JOIN film_has_personne ON film.id = film_has_personne.id_film WHERE role = "realisateur" AND film_has_personne.id_film = '.$idfilm.';');
	$row4 = mysqli_fetch_array($req4, MYSQL_ASSOC);?>
		<section id="main">
			<?php include "./infosfilm.php"; 
				  include "./listeimages.php"; 
				  include "./cadreapercupersonne.php"; ?>		
		</section>
	
<?php }
include "./footer.php"; ?>
</body>
</html>