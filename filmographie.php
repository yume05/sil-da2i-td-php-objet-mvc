<h3>Filmographie</h3>
	<ul>
		<?php 
		print_r($data);
			for($i=0;$i<sizeof($data['films']);$i++){
				echo "<li>".$data['film'][$i]['datesortie']." - ".$data['film'][$i]['titre']."</li>";
			}
		?>
	</ul>