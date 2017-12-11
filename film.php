<?php 
include "./connect.php";
getBlock("./header.php");
if(isset($_GET['idfilm'])){
	$idfilm = $_GET['idfilm'];
	$req  = mysqli_query($link, 'SELECT * FROM film WHERE id = '.$idfilm.';');
	$row1 = mysqli_fetch_array($req, MYSQL_ASSOC);
	$req1 = mysqli_query($link, 'SELECT * FROM personne INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "acteur" AND film_has_personne.id_film = '.$idfilm.';');
	$req2 = mysqli_query($link, 'SELECT personne.id, prenom, nom, chemin, id_film FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "acteur" AND film_has_personne.id_film = '.$idfilm.';');
	$req3 = mysqli_query($link, 'SELECT * FROM photo INNER JOIN film_has_photo ON photo.id = film_has_photo.id_photo WHERE role = "affiche" AND film_has_photo.id_film = '.$idfilm.';');		
	$req4 = mysqli_query($link, 'SELECT MONTH(birthday) AS "mois", DAY(birthday) AS "jour", YEAR(birthday) AS "annee", legende, nom, prenom, chemin, biographie, id_film, personne.id AS "id_personne" FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "realisateur" AND film_has_personne.id_film = '.$_GET['idfilm'].';');
	//$req5 = mysqli_query($link, 'SELECT titre, datesortie FROM film INNER JOIN film_has_personne ON film.id = film_has_personne.id_film WHERE role = "realisateur" AND film_has_personne.id_film = '.$idfilm.';');
	$tabInfos['info'] = array('id' => $row1['id'],
					'titre' => $row1['titre'],
					'synopsis' => $row1['synopsis'],
					'datesortie' => $row1['datesortie'],
					'note' => $row1['note']);
	$i = 0;
	while($row = mysqli_fetch_array($req1)){
		$tabInfos['acteurs'][$i] = array('id' => $row['id'],
						'nom' => $row['nom'],
						'prenom' => $row['prenom']);
		$i++;
	}
	$i = 0;
	while($row = mysqli_fetch_array($req2)){
		$tabPersonnes['acteurs'][$i] = array('id' => $row['id'],
										'chemin' => $row['chemin'],
										'nom' => $row['nom'],
										'prenom' => $row['prenom'],
										'idfilm' => $row['id_film']
										);
		$i++;
	}
	$i = 0;
	while($row = mysqli_fetch_array($req3)){
		$tabImages['affiche'][$i] = array('id' => $row['id_photo'],
										'chemin' => $row['chemin'],
										'legende' => $row['legende']);
		$i++;
	}
	
	while($row = mysqli_fetch_array($req4)){
		$tabPersonnes['realisateur'] = array('id' => $row['id_personne'],
										'legende' => $row['legende'],
										'chemin' => $row['chemin'],
										'nom' => $row['nom'],
										'prenom' => $row['prenom'],
										'biographie' => $row['biographie'],
										'jour' => $row['jour'],
										'mois' => $row['mois'],
										'annee' => $row['annee'],
										'idfilm' => $row['id_film']
										);
	}
	
	?>
		<section id="main">
			<?php getBlock("./infosfilm.php", $tabInfos); 
				  getBlock("./listeimages.php", $tabImages); 
				  getBlock("./cadreapercupersonne.php", $tabPersonnes); ?>		
		</section>
	
<?php }
getBlock("./footer.php"); ?>
</body>
</html>