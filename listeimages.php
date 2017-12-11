<article id="images">
		<p><h3>Liste d'images :</h3>
			<ul>
				<?php
				for($i=0;$i<sizeof($data['affiche']);$i++){
					echo "<li><figure><img src='".$data['affiche'][$i]['chemin']."'/><figcaption>".$data['affiche'][$i]['legende']."</figcaption></figure></li>";
				}
				?>	
				</ul>
		</p>

		</article>