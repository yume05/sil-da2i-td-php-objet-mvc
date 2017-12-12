<h3>Filmographie</h3>
	<ul>
		<?php 
			for($i=0;$i<sizeof($data['films']);$i++){
				echo "<li>".$data['films'][$i]['datesortie']." - ".$data['films'][$i]['titre']."</li>";
			}
		?>
	</ul>