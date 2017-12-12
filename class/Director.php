<?php
include_once 'Bdd.php';
include_once 'Person.php';
$bdd = new Bdd();
class Director extends Person {
	public function getAllDirectors(){
		global $bdd;
		$requete = $bdd->QuerySQL('SELECT DISTINCT(nom), prenom, id FROM personne INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "realisateur";');
		$i=0;
		while($row = mysqli_fetch_array($requete, MYSQL_ASSOC)){
			$tabDirectors[$i] = array('id' => $row['id'],
								'nom' => $row['nom'],
								'prenom' => $row['prenom']);
			$i++;
		}
		return $tabDirectors;
	}
	public function getBaseInfos($idFilm = false, $idRea = false){
		global $bdd;
		//En fonction de l'id du film
		if($idRea == false){
			$ressource = $bdd->QuerySQL('SELECT MONTH(birthday) AS "mois", DAY(birthday) AS "jour", YEAR(birthday) AS "annee", legende, nom, prenom, chemin, biographie, id_film, personne.id AS "id_personne" FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "realisateur" AND film_has_personne.id_film = '.$idFilm.';');
	
			while($row = mysqli_fetch_array($ressource)){
			$tabPersonne = array('id' => $row['id_personne'],
											'legende' => $row['legende'],
											'chemin' => $row['chemin'],
											'nom' => $row['nom'],
											'prenom' => $row['prenom'],
											'biographie' => $row['biographie'],
											'jour' => $row['jour'],
											'mois' => $row['mois'],
											'annee' => $row['annee'],
											'idfilm' => $row['id_film']
											);
				}
			return  $tabPersonne;
		}
		//en fonction de l'id du réalisateur
		if($idFilm == false){
			$ressource = $bdd->QuerySQL('SELECT MONTH(birthday) AS "mois", DAY(birthday) AS "jour", YEAR(birthday) AS "annee", legende, nom, prenom, chemin, role, biographie, birthday, personne.id AS "id" FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE film_has_personne.id_personne = '.$idRea.';');
			$row = mysqli_fetch_array($ressource, MYSQL_ASSOC); 
			$tabRea = array('id' => $row['id'],
								'chemin' => $row['chemin'],
								'nom' => $row['nom'],
								'prenom' => $row['prenom'],
								'biographie' => $row['biographie'],
								'jour' => $row['jour'],
								'mois' => $row['mois'],
								'annee' => $row['annee']
								);
			return $tabRea;
		}
	}
	public function getActorsFetiches($idFilm){
		global $bdd;
		$ressource = $bdd->QuerySQL('SELECT personne.id, prenom, nom, chemin FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "acteur" AND film_has_personne.id_film = '.$idFilm.' LIMIT 2;');
		$i = 0;
		while($row = mysqli_fetch_array($ressource)){
		$tabRea[$i] = array('id' => $row['id'],
									'chemin' => $row['chemin'],
									'nom' => $row['nom'],
									'prenom' => $row['prenom']
									);
		$i++;
		}
		return $tabRea;

	}
}

?>