<?php
/* Définir les variables*/


/* Variable de connexion de base de donnée */

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'puff');
define('DB_DSN', 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';port=3306;charset=UTF8');

/* public function query($sql){
  
    // Exécution de la requête de sélection
    $resultat = $dbh->query($sql);
   return $resultat->fetchAll(PDO::FETCH_ASSOC);
   /* déconnexion de la base de données */

  

?>