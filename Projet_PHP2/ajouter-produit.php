<?php 
require_once("header-connect.php");
require_once("variables.php");

// connexion à la BDD :
$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);

// préparation de la requete :








$dbh = null;

?>

   


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Gestion articles</title>
</head>
<body>
<div class="container"> 
<div class="container">
    <div class="myform">
      <form method="POST" action="suppr.php" enctype="multipart/form-data">
        <h2 class= "text-center">Ajout nouveau produit</h2>
        <input type="text" placeholder="Nom du produit" name="nom_produit">
        <input type="number" placeholder="prix promo" name="prix_promo">
        <input type="hidden" name="MAX_FILE_SIZE" value="524288" />
            <label for="photo">Ajouter la photo :</label>
            <input type="file" id="photo" name="picture" accept="image/jpeg" required />
            <br />
            <br />
        <button type="submit" name="ajout-puff"> Ajouter</button>
      </form>
    </div>
    <div class="image">
      <img src="images/passion.jpg">
    </div>
    
  </div>
    
  
</div>
<div>
<?php include('footer.php');?>

</div>

</body>
</html>
