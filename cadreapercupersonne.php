<article>
		<p><h3>Réalisateur :</h3>
		<figure><figcaption><?php echo "<a href='./realisateur.php?idrea=".$data['realisateur']['id']."&idfilm=".$data['realisateur']['idfilm']."'>".$data['realisateur']['prenom']." ".$data['realisateur']['nom']."</a>";?></figcaption><img src=<?php echo "'".$data['realisateur']['chemin']."'"; ?>/></figure>

	</p>
</article>
<article id="acteurs">
	<p><h3>Acteurs principaux :</h3>
	<?php
	for($i=0;$i<sizeof($data['acteurs']);$i++){
		echo "<figure><figcaption><a href='./acteur.php?idact=".$data['acteurs'][$i]['id']."&idfilm=".$data['acteurs'][$i]['idfilm']."'>".$data['acteurs'][$i]['nom']." ".$data['acteurs'][$i]['prenom']."</a></figcaption><img src='".$data['acteurs'][$i]['chemin']."' /></figure>";
	}
	?>
	</p>
</article>