<?php 
include './connect.php';
getBlock("./header.php"); ?>
<section  id="main">
	<?php 
	if(isset($_GET['idrea']) && isset($_GET['idfilm'])){
		echo "<a href='film.php?idfilm=".$_GET['idfilm']."'><button>Retour</button></a>";
		$req1 = mysqli_query($link, 'SELECT MONTH(birthday) AS "mois", DAY(birthday) AS "jour", YEAR(birthday) AS "annee", legende, nom, prenom, chemin, role, biographie, birthday, personne.id AS "id" FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE film_has_personne.id_personne = '.$_GET['idrea'].';');
		$row1 = mysqli_fetch_array($req1, MYSQL_ASSOC); 
		$req2 = mysqli_query($link, 'SELECT titre, datesortie FROM film INNER JOIN film_has_personne ON film.id = film_has_personne.id_film WHERE film_has_personne.id_personne = '.$_GET['idrea'].' ORDER BY datesortie ASC;');
		$tabRea['infos'] = array('id' => $row1['id'],
								'chemin' => $row1['chemin'],
								'nom' => $row1['nom'],
								'prenom' => $row1['prenom'],
								'biographie' => $row1['biographie'],
								'jour' => $row1['jour'],
								'mois' => $row1['mois'],
								'annee' => $row1['annee']
								);
		$i=0;
		while($row = mysqli_query($req2)){
			$tabRea['films'][$i] = array('titre' => $row['titre'],
									'datesortie' => $row['datesortie']
									);
			$i++;
		}

		?>
		<article>
			<p><h1><b>Réalisateur</b></h1></p>
		</article>
			<?php getBlock("./infopersonnes.php", $tabRea); ?>
			<?php getBlock("./filmographie.php", $tabRea); ?>

	<?php }

		if(isset($_GET['id'])){
			$req1 = mysqli_query($link, 'SELECT MONTH(birthday) AS "mois", DAY(birthday) AS "jour", YEAR(birthday) AS "annee", legende, nom, prenom, chemin, role, biographie, birthday, personne.id AS "id" FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE film_has_personne.id_personne = '.$_GET['id'].';');
			$row1 = mysqli_fetch_array($req1, MYSQL_ASSOC); 
			$req2 = mysqli_query($link, 'SELECT titre, datesortie FROM film INNER JOIN film_has_personne ON film.id = film_has_personne.id_film WHERE film_has_personne.id_personne = '.$_GET['id'].' ORDER BY datesortie ASC;');
			$tabRea['infos'] = array('id' => $row1['id'],
								'chemin' => $row1['chemin'],
								'nom' => $row1['nom'],
								'prenom' => $row1['prenom'],
								'biographie' => $row1['biographie'],
								'jour' => $row1['jour'],
								'mois' => $row1['mois'],
								'annee' => $row1['annee']
								);
			$i=0;
			while($row = mysqli_query($req2)){
				$tabRea['films'][$i] = array(
										'titre' => $row['titre'],
										'datesortie' => $row['datesortie']
										);
				$i++;
			}
			?>
				<article>
					<p><h1><b>Réalisateur</b></h1></p>
			</article>
			<?php getBlock("./infopersonnes.php", $tabRea); ?>
			<?php getBlock("./filmographie.php", $tabRea); ?>
		
		<?php }?>
</section>
<?php getBlock("./footer.php"); ?>
