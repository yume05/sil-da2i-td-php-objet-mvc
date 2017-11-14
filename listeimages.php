<article id="images">
		<p><h3>Liste d'images :</h3>
			<ul>
				<?php
				$req3 = mysqli_query($link, 'SELECT * FROM photo INNER JOIN film_has_photo ON photo.id = film_has_photo.id_photo WHERE role = "affiche" AND film_has_photo.id_film = '.$idfilm.';');
				while($row = mysqli_fetch_array($req3, MYSQL_ASSOC)){
					echo "<li><figure><img src='".$row['chemin']."'/><figcaption>".$row['legende']."</figcaption></figure></li>";
				}
				?>	
				</ul>
		</p>

		</article>