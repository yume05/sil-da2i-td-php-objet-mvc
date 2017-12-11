<article id="realisateur">
	<p><?php 
	echo $data['infos']['prenom']." ".$data['infos']['nom']; ?><br>

		Né le <time><?php
			$month = datetomonth($data['infos']['mois']);
			echo $data['infos']['jour']." ".$month." ".$data['infos']['annee'];
		?></time><br>
		<img src=<?php echo "'".$data['infos']['chemin']."'"; ?> width="200" />
		<h3>Biographie</h3>
		 <?php echo $data['infos']['biographie']; ?><br>
		
	</p>
</article>