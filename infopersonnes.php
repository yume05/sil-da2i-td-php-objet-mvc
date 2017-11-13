		<article>
				<p><h1><b>Réalisateur</b></h1></p>
		</article>
		
		<article id="realisateur">
			<p><?php 
			echo $row4['prenom']." ".$row4['nom']; ?><br>

				Né le <time><?php
					$month = datetomonth($row4['mois']);
					echo $row4['jour']." ".$month." ".$row4['annee'];
				?></time><br>
				<img src="./auteur.jpg" width="200" />
				<h3>Biographie</h3>
				 <?php echo $row4['biographie']; ?><br>
				<h3>Filmographie</h3>
				<ul>
					<?php 
						while($row = mysqli_fetch_array($req5, MYSQL_ASSOC)){
							echo "<li>".$row['datesortie']." - ".$row['titre']."</li>";
						}
					?>
				</ul>
			</p>
		</article>