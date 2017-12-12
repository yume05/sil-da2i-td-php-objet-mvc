<?php 
include("./header.php");
if(isset($_GET['idfilm'])){
	$idfilm = $_GET['idfilm'];
	$tabInfos['info'] = $movie->getBaseInfos($idfilm, false);
	$tabInfos['acteurs'] = $movie->getAllActeursMovie($idfilm);
	$tabPersonnes['acteurs'] = $movie->getInfosActeurs($idfilm);
	$tabImages['affiche'] = $movie->getAfficheFilm($idfilm);
	$tabPersonnes['realisateur'] = $director->getBaseInfos($idfilm);
	/*print_r($tabInfos);
	print_r($tabPersonnes);
	print_r($tabImages);*/
	
	
	?>
		<section id="main">
					<?php 
				  getBlock("./infosfilm.php", $tabInfos); 
				  getBlock("./listeimages.php", $tabImages); 
				  getBlock("./cadreapercupersonne.php", $tabPersonnes); ?>		
		</section>
	
<?php }
getBlock("./footer.php"); ?>
</body>
</html>