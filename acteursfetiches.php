<h3>Acteurs fétiches</h3>
	<ul>
		<?php 
	for($i=0;$i<sizeof($data['acteurs']);$i++){
		echo "<figure><figcaption>".$data['acteurs'][$i]['nom']." ".$data['acteurs'][$i]['prenom']."</figcaption><img src='".$data['acteurs'][$i]['chemin']."' /></figure>";
	}
		?>
	</ul>