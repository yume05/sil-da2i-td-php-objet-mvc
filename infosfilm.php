<h1><?php echo $row1['titre']; ?></h1>
		<article>
			<p>
			<h3>Date de sortie :</h3><time><?php echo $row1['datesortie']; ?></time>
			</p>
		</article>
		<article>
			<p>
			<h3>Acteurs principaux :</h3>
				<ul>
				<?php 
				while($row = mysqli_fetch_array($req1)){
					echo "<li>".$row['nom']." ".$row['prenom']."</li>";
				}
			?>
				</ul>
			</p>
		</article>
		<article id="synopsis">
			<p ><h3>Synopsis</h3>
					<?php echo $row1['synopsis']; ?></p>
		</article>
		<article>
			<p><h3>Note : </h3> <?php echo $row1['note']; ?>/5</p>
			<meter value=<?php echo "'".$row1['note']."'"; ?> min="0" max="5"/>
		</article>