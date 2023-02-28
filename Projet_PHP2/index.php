<?php
require_once("header.php"); 
require_once("variables.php"); 


/*  Se connecter à la base de données */

$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
$sql = "SELECT produits.nom, produits.prix, produits.prix_promo,produits.picture FROM produits";
// Exécution de la requête de sélection
$resultat = $dbh->query($sql);
$produits = $resultat->fetchAll(PDO::FETCH_ASSOC);


/* déconnexion de la base de données */
$dbh = null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Accueil</title>
</head>
<body>
<div class="container"> 
    <div class="row">
    <?php

    // Boucle pour créer un élément identique pour les 3 premiers produits :

for ($i=0; $i<3;$i++){
    echo '
        <div class="col-lg-3 mt-5 mx-4 mb-5">
            <form action="gestion-panier.php" method="POST" name="ajout_panier">
          
             <div class="card px-2" style="width: 17rem;">
                <img src="'.$produits[$i]['picture'].'" class="card-img-top" alt="item1">
            <div class="card-body text-center">
        
           
        <h5 class="card-title">'.$produits[$i]['nom'].'</h5>
</br>
            <p class="card-text">Voyagez grâce au goût du fruit de la passion</p>
            <p class="card-text">Prix '.$produits[$i]['prix_promo'].'.00 €</p>
            <button type ="submit" name="ajout_panier" class="btn btn-warning">Ajouter au panier</button>
            <input type="hidden" name="nom_produit" value ="'.$produits[$i]['nom'].'">
            <input type="hidden" name="prix" value ="'.$produits[$i]['prix_promo'].'">
            <input type="hidden" name="picture" value ="'.$produits[$i]['picture'].'">
           
  </div>
</div>
</form>
        </div>
        ';

    }
    ?>
</div>
    

</div>


    <?php require_once("footer.php")?>
</body>
</html>