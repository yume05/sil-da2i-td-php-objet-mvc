<article id="realisateur">
	<p><?php 
	echo $row4['prenom']." ".$row4['nom']; ?><br>

		Né le <time><?php
			$month = datetomonth($row4['mois']);
			echo $row4['jour']." ".$month." ".$row4['annee'];
		?></time><br>
		<img src=<?php echo "'".$row4['chemin']."'"; ?> width="200" />
		<h3>Biographie</h3>
		 <?php echo $row4['biographie']; ?><br>
		
	</p>
</article>