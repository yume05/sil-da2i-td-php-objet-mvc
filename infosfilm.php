<?php
?>
<h1><?php echo $data['info']['titre']; ?></h1>
		<article>
			<p>
			<h3>Date de sortie :</h3><time><?php echo $data['info']['datesortie']; ?></time>
			</p>
		</article>
		<article>
			<p>
			<h3>Acteurs principaux :</h3>
				<ul>
				<?php 
				for($i=0;$i<sizeof($data['acteurs']);$i++){
					echo "<li>".$data['acteurs'][$i]['nom']." ".$data['acteurs'][$i]['prenom']."</li>";
				}
			?>
				</ul>
			</p>
		</article>
		<article id="synopsis">
			<p ><h3>Synopsis</h3>
					<?php echo $data['info']['synopsis']; ?></p>
		</article>
		<article>
			<p><h3>Note : </h3> <?php echo $data['info']['note']; ?>/5</p>
			<meter value=<?php echo "'".$data['info']['note']."'"; ?> min="0" max="5"/>
		</article>