<article>
			<p><h3>Réalisateur :</h3>
				<figure><figcaption><?php echo $row4['prenom']." ".$row4['nom'];?></figcaption><img src=<?php echo "'".$row4['chemin']."'"; ?>/></figure>

			</p>
		</article>
		<article id="acteurs">
			<p><h3>Acteurs principaux :</h3>
			<?php
			$req2 = mysqli_query($link, 'SELECT * FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "acteur" AND film_has_personne.id_film = 1;');
			while($row = mysqli_fetch_array($req2, MYSQL_ASSOC)){
				echo "<figure><figcaption>".$row['nom']." ".$row['prenom']."</figcaption><img src='".$row['chemin']."' /></figure>";
			}
			?>
			</p>
		</article>