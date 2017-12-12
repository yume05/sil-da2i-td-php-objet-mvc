<?php 
include("./header.php"); ?>
<section  id="main">
	<?php 
	if(isset($_GET['idrea']) && isset($_GET['idfilm'])){
		echo "<a href='film.php?idfilm=".$_GET['idfilm']."'><button>Retour</button></a>";
		$tabRea['infos'] = $director->getBaseInfos($_GET['idfilm'], false);
		$tabRea['acteurs'] = $director->getActorsFetiches($_GET['idfilm']);
		$tabRea['films'] = $movie->getFilmsRea($_GET['idrea']);
		//print_r($tabRea);
		
		?>
		<article>
			<p><h1><b>Réalisateur</b></h1></p>
		</article>
			<?php getBlock("./infopersonnes.php", $tabRea); ?>
			<?php getBlock("./filmographie.php", $tabRea); ?>
			<?php getBlock("./acteursfetiches.php", $tabRea); ?>

	<?php }

		if(isset($_GET['id'])){
			$tabRea['infos'] = $director->getBaseInfos(false, $_GET['id']);
			$tabRea['films'] = $movie->getFilmsRea($_GET['id']);
			//print_r($tabRea);

			?>
				<article>
					<p><h1><b>Réalisateur</b></h1></p>
			</article>
			<?php getBlock("./infopersonnes.php", $tabRea); ?>
			<?php getBlock("./filmographie.php", $tabRea); ?>
		
		<?php }?>
</section>
<?php getBlock("./footer.php"); ?>
