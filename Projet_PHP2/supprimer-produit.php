<?php 
require_once("variables.php");
require_once("header.php");

$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
$sql = "SELECT produits.id,produits.nom, produits.prix, produits.prix_promo,produits.picture FROM produits";
// Exécution de la requête de sélection
$resultat = $dbh->query($sql);
$produits = $resultat->fetchAll(PDO::FETCH_ASSOC);




$dbh = null;

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Supprimer produit</title>
</head>
<body>
    <div class="container">
        <div class="row"> 
            <div class="col-lg-12 text-center border rounded bg-light mt-5 ">
                <h1> Liste des produits </h1>
            </div>
            <div class="col-lg-9 mx-auto mt-5"> 
                <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">PRODUIT</th>
                        <th scope="col">PRIX</th>
                        <th scope="col">ID</th>
                       
            
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                      
                            foreach($produits as $produit) {
                              
                                echo'
                                <tr>
                                <td><div "><img style="width: 2.7rem; "height: 2.7rem; src="'.$produit["picture"].'"></div></td>
                                <td>'.$produit["nom"].'</td>
                                <td>'.$produit["prix"].'.00€<input type="hidden" class="prix_puff" value="'.$produit["prix"].'"></td>
                                <td>'.$produit["id"].'</td>
                                <form action="suppr.php" method="POST" name="supprimer-puff">
                                <td><button type ="submit" name="supprimer-puff" class="btn btn-sm btn-outline-warning"> Supprimer </button></td>
                                <input type="hidden" name="puff-id" value="'.$produit["id"].'">
                                </form>
                                </tr>';
    
                            }
                        
                       
                        ?>
                      
                 </table>
            </div>
           
           
        </div>
     
    </div>
   
  
   


<?php include("footer.php")?>  
</body>

</html>