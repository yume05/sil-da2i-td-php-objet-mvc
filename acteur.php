<?php include "./header.php"; ?>
	<section  id="main">
	<?php 
	if(isset($_GET['idact']) && isset($_GET['idfilm'])){
		echo "<a href='film.php?idfilm=".$_GET['idfilm']."'><button>Retour</button></a>";
		$tabPersonne['infos'] = $actor->getBaseInfos($_GET['idact']);
		?>
		<article>
				<p><h1><b>Acteur</b></h1></p>
		</article>
		<?php getBlock("./infopersonnes.php", $tabPersonne);
		}?>
	<?php 
	if(isset($_GET['id'])){
		$tabPersonne['infos'] = $actor->getBaseInfos($_GET['id']);
		?>
		<article>
				<p><h1><b>Acteur</b></h1></p>
		</article>
		<?php getBlock("./infopersonnes.php", $tabPersonne); 
		}?>
		</section>
		<?php getBlock("./footer.php"); ?>
	</body>
	</html>
