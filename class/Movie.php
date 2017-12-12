<?php
include_once 'Bdd.php';
$bdd = new Bdd();
class Movie{
	public function getAllMovies(){
		global $bdd;
		$requete = $bdd->QuerySQL('SELECT id, titre FROM film where synopsis is not NULL;');
		$i=0;
		while($row = mysqli_fetch_array($requete, MYSQL_ASSOC)){
			$tabMovies[$i] = array('id' => $row['id'],
								'titre' => $row['titre']);
			$i++;
		}
		return $tabMovies;
	}
	
	public function getBaseInfos($idFilm){
		global $bdd;
		$ressource = $bdd->QuerySQL('SELECT * FROM film WHERE id = '.$idFilm.';');
		$result = mysqli_fetch_array($ressource, MYSQL_ASSOC);
		$tabInfos = array('id' => $result['id'],
					'titre' => $result['titre'],
					'synopsis' => $result['synopsis'],
					'datesortie' => $result['datesortie'],
					'note' => $result['note']);
		return $tabInfos;

	}

	public function getAllActeursMovie($idFilm){
		global $bdd;
		$ressource = $bdd->QuerySQL('SELECT * FROM personne INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "acteur" AND film_has_personne.id_film = '.$idFilm.';');
		$i = 0;
		while($row = mysqli_fetch_array($ressource)){
			$tabInfos[$i] = array('id' => $row['id'],
							'nom' => $row['nom'],
							'prenom' => $row['prenom']);
			$i++;
		}
		return $tabInfos;
	}

	public function getInfosActeurs($idFilm){
		global $bdd;
		$ressource = $bdd->QuerySQL('SELECT personne.id, prenom, nom, chemin, id_film FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "acteur" AND film_has_personne.id_film = '.$idFilm.';');
		$i = 0;
		while($row = mysqli_fetch_array($ressource)){
			$tabPersonnes[$i] = array('id' => $row['id'],
										'chemin' => $row['chemin'],
										'nom' => $row['nom'],
										'prenom' => $row['prenom'],
										'idfilm' => $row['id_film']
										);
			$i++;
		}
		return $tabPersonnes;
	}

	public function getAfficheFilm($idFilm){
		global $bdd;
		$ressource =$bdd->QuerySQL('SELECT * FROM photo INNER JOIN film_has_photo ON photo.id = film_has_photo.id_photo WHERE role = "affiche" AND film_has_photo.id_film = '.$idFilm.';');
		$i = 0;
		while($row = mysqli_fetch_array($ressource)){
			$tabImages[$i] = array('id' => $row['id_photo'],
											'chemin' => $row['chemin'],
											'legende' => $row['legende']);
			$i++;
		}
		return $tabImages;
	
	}
	public function getFilmsRea($idRea){
		global $bdd;
		$ressource = $bdd->QuerySQL('SELECT titre, datesortie FROM film INNER JOIN film_has_personne ON film.id = film_has_personne.id_film WHERE film_has_personne.id_personne = '.$idRea.' ORDER BY datesortie ASC;');
		$i=0;
		while($row = mysqli_fetch_array($ressource, MYSQL_ASSOC)){
			$tabRea[$i] = array('titre' => $row['titre'],
									'datesortie' => $row['datesortie']
									);
			$i++;
		}
		return $tabRea;
	}


}
?>