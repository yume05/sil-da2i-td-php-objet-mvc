<article>
			<p><h3>Réalisateur :</h3>
				<figure><figcaption><?php echo "<a href='./realisateur.php?idrea=".$row4['id_personne']."&idfilm=".$row4['id_film']."'>".$row4['prenom']." ".$row4['nom']."</a>";?></figcaption><img src=<?php echo "'".$row4['chemin']."'"; ?>/></figure>

			</p>
		</article>
		<article id="acteurs">
			<p><h3>Acteurs principaux :</h3>
			<?php
			$req2 = mysqli_query($link, 'SELECT personne.id, prenom, nom, chemin, id_film FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "acteur" AND film_has_personne.id_film = '.$idfilm.';');
			while($row = mysqli_fetch_array($req2, MYSQL_ASSOC)){
				echo "<figure><figcaption><a href='./acteur.php?idact=".$row['id']."&idfilm=".$row['id_film']."'>".$row['nom']." ".$row['prenom']."</a></figcaption><img src='".$row['chemin']."' /></figure>";
			}
			?>
			</p>
		</article>