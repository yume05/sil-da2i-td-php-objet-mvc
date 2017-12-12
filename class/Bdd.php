<?php
/**
 * Database singleton
 */
class Bdd {
    public static $instance;
    public
      $serveur     = '',
      $bdd         = '',
      $identifiant = '',
      $mdp         = '',
      $lien        = '',
      $debogue     = true,
      $nbRequetes  = 0;
    /**
    * Constructeur de la classe
    * Connexion aux serveur de base de donnée et sélection de la base
    *
    * $Serveur     = L'hôte (ordinateur sur lequel Mysql est installé)
    * $Bdd         = Le nom de la base de données
    * $Identifiant = Le nom d'utilisateur
    * $Mdp         = Le mot de passe
    */
    public function __construct($serveur = 'localhost', $bdd = 'projet_film_lp', $identifiant = 'phpmyadmin', $mdp = 'ini01')
    {
      $this->serveur     = $serveur;
      $this->bdd         = $bdd;
      $this->identifiant = $identifiant;
      $this->mdp         = $mdp;
      $this->lien= mysqli_connect($this->serveur, $this->identifiant, $this->mdp, $this->bdd);
      mysqli_set_charset($this->lien, "utf8");
      if(!$this->lien && $this->debogue)
        throw new MySQLExeption('Erreur de connexion au serveur MySql!!!');
    }

    /*public function TabResultatSQL($requete)
    {
      $i = 0;
      $ressource = mysqli_query($this->lien, $requete);
      $tabResultat=array();
      while($ligne = mysqli_fetch_array($ressource, MYSQL_ASSOC)){
        for($i = 0; $i < mysqli_field_count($ressource); $i++)
                $tabResultat[$ligne] = $ ;
                printf("Table:    %s\n", $finfo->table);
                printf("max. Len: %d\n", $finfo->max_length);
                printf("Flags:    %d\n", $finfo->flags);
                printf("Type:     %d\n\n", $finfo->type);
            }
         
    }
     
            $tabResultat[$ligne] = array($valeur[$i];
        }
        $i++; 
      }
     // $this->nbRequetes++;
      return $tabResultat;
    }*/

    public function QuerySQL($requete){
        $ressource = mysqli_query($this->lien, $requete);
        return $ressource;
    }
    /**
    * Envoie une requête SQL et retourne le nombre de table affecté
    *
    * $Requete = Requête SQL
    */
    public function NbTableAffecteeSQL($requete)
    {
      $ressource = mysqli_query($requete,$this->lien);
      if (!$ressource and $this->debogue) throw new MySQLExeption('Erreur de requête SQL!!!');
      $this->nbRequetes++;
      $nbAffectee = mysqli_affected_rows($ressource);
      return $nbAffectee;
    }
}