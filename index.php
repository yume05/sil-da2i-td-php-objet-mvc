<?php
include './connect.php';
?>
	<?php 

	getBlock("./header.php"); ?>
	<section  id="main">

		<?php 
		echo "<br><b>FILMS : </b><br>";
		$req = mysqli_query($link, 'SELECT * FROM film where synopsis is not NULL;');
		while($row = mysqli_fetch_array($req, MYSQL_ASSOC)){
			echo "<a href='./film.php?idfilm=".$row['id']."'>".$row['titre']."</a><br>";
		}
		echo "<br><b>REALISATEURS : </b><br>";
		$req1 = mysqli_query($link, 'SELECT DISTINCT(nom), prenom, id FROM personne INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "realisateur";');
		while($row = mysqli_fetch_array($req1, MYSQL_ASSOC)){
			echo "<a href='./realisateur.php?id=".$row['id']."'>".$row['nom']." ".$row['prenom']."</a><br>";
		}
		echo "<br><b>ACTEURS :</b> <br>";
		$req1 = mysqli_query($link, 'SELECT * FROM personne INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "acteur";');
		while($row = mysqli_fetch_array($req1, MYSQL_ASSOC)){
			echo "<a href='./acteur.php?id=".$row['id']."'>".$row['nom']." ".$row['prenom']."</a><br>";
		}
		echo "<br>";
		 ?>		
	</section>
<?php getBlock("./footer.php"); ?>

</body>
</html>