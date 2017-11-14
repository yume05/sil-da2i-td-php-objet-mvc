<h3>Filmographie</h3>
				<ul>
					<?php 
						while($row = mysqli_fetch_array($req5, MYSQL_ASSOC)){
							echo "<li>".$row['datesortie']." - ".$row['titre']."</li>";
						}
					?>
				</ul>