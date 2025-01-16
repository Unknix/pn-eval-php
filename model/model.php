<?php

/**
 * L'objet Model permet l'interaction avec la base de données
 */
class Model {
    private PDO $bdd;

    /**
     * Construction de l'objet model - cette méthode n'est pas à modifier - vous devez respecter les instructions de construction de la base de données qui se trouvent dans le fichier bdd.sql
     */
    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=eval_php;charset=utf8','eval_admin', 'c0d3r1sfun');
        } catch (Exception $e) {
            //Affiche un message d'erreur en cas d'echec de connexion à la base de données
            echo("Echec de la connexion à la base de données :".$e->getMessage());
            die;
        }
    }

    
    /**
     * Cette Méthode envoie au controller un tableau avec l'ensemble des évènements stockés en base de données
     *
     * @return Array
     */
    public function getEvents() {
       $query = "SELECT * FROM events ORDER BY id ASC";
       $stmt = $this->bdd->prepare($query);
       $stmt->execute();
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}