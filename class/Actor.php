<?php
include_once 'Bdd.php';
include_once 'Person.php';
$bdd = new Bdd();
class Actor extends Person {
	public function getAllActors(){
		global $bdd;
		$requete = $bdd->QuerySQL('SELECT DISTINCT(nom), prenom, id FROM personne INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE role = "acteur";');
		$i=0;
		while($row = mysqli_fetch_array($requete, MYSQL_ASSOC)){
			$tabActors[$i] = array('id' => $row['id'],
								'nom' => $row['nom'],
								'prenom' => $row['prenom']);
			$i++;
		}
		return $tabActors;
			
	}

	public function getBaseInfos($idAct){
		global $bdd;
		$ressource = $bdd->QuerySQL('SELECT MONTH(birthday) AS "mois", DAY(birthday) AS "jour", YEAR(birthday) AS "annee", legende, nom, prenom, chemin, role, biographie, birthday FROM personne INNER JOIN personne_has_photo ON personne.id = personne_has_photo.id_personne INNER JOIN photo ON photo.id = personne_has_photo.id_photo INNER JOIN film_has_personne ON personne.id = film_has_personne.id_personne WHERE film_has_personne.id_personne = '.$idAct.';');
		while($row = mysqli_fetch_array($ressource)){
			$tabPersonne = array('legende' => $row['legende'],
											'chemin' => $row['chemin'],
											'nom' => $row['nom'],
											'prenom' => $row['prenom'],
											'biographie' => $row['biographie'],
											'jour' => $row['jour'],
											'mois' => $row['mois'],
											'annee' => $row['annee']
											);
		}
		return  $tabPersonne; 
	}

}



?>