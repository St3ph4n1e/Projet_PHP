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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweetpuff</title>
</head>
<body>

<div class="container"> 
    <div class="row">
    <?php
    // Boucle for Each pour afficher tous les produits : 
    foreach ($produits as $produit) {

        // On affiche les données de la BDD :
    echo '
        <div class="col-lg-3 mt-5 mx-4 mb-5">
            <form action="gestion-panier.php" method="POST">
          
             <div class="card px-2" style="width: 17rem;">
                <img src="'.$produit['picture'].'" class="card-img-top" alt="item1">
            <div class="card-body text-center">
        
           
        <h5 class="card-title">'.$produit['nom'].'</h5>
</br>
            <p class="card-text">Voyagez grâce au goût du fruit de la passion</p>
            <p class="card-text">Prix '.$produit['prix_promo'].'.00 €</p>
            <button type ="submit" name="ajout_panier" class="btn btn-warning">Ajouter au panier</button>
            <input type="hidden" name="nom_produit" value ="'.$produit['nom'].'">
            <input type="hidden" name="prix" value ="'.$produit['prix_promo'].'">
            <input type="hidden" name="picture" value ="'.$produit['picture'].'">
           
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