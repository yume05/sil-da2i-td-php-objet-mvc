<?php 
include ("./header.php"); ?>
	<section  id="main">

		<?php 
		echo "<br><b>FILMS : </b><br>";
		$tabMovies = $movie->getAllMovies();
		for ($i=0; $i<sizeof($tabMovies);$i++){
			echo "<a href='./film.php?idfilm=".$tabMovies[$i]['id']."'>".$tabMovies[$i]['titre']."</a><br>";
		}
		
		echo "<br><b>REALISATEURS : </b><br>";
		$tabDirectors = $director->getAllDirectors();
		for ($i=0; $i<sizeof($tabDirectors);$i++){
			echo "<a href='./realisateur.php?id=".$tabDirectors[$i]['id']."'>".$tabDirectors[$i]['nom']." ".$tabDirectors[$i]['prenom']."</a><br>";
		}

		echo "<br><b>ACTEURS :</b> <br>";
		$tabActors = $actor->getAllActors();
		for ($i=0; $i<sizeof($tabActors);$i++){
			echo "<a href='./acteur.php?id=".$tabActors[$i]['id']."'>".$tabActors[$i]['nom']." ".$tabActors[$i]['prenom']."</a><br>";
		}
		echo "<br>";
		 ?>		
	</section>
<?php getBlock("./footer.php"); ?>

</body>
</html>