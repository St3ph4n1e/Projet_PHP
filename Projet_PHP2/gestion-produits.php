<?php require_once("header.php")?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gestion articles</title>
</head>
<body>
<div class="container"> 
    <div class="row">
  


 
        <div class="col-lg-3 mt-5 mx-4 mb-5">
            <form action="puff.php" method="POST" name="puff">
          
             <div class="card px-2" style="width: 17rem;">
                <img src="images/1.jpg" class="card-img-top" alt="item1">
            <div class="card-body text-center">
        
           
        <h5 class="card-title">Par ici les puffs</h5>
        </br>
            <p class="card-text">Accedez au catalogue</p>
           
            <button type ="submit" name="puff" class="btn btn-warning">Accéder</button>
        
           
  </div>


</div>
</form>
        </div>
    
        <div class="col-lg-3 mt-5 mx-4 mb-5">
            <form action="ajouter-produit.php" method="POST" name="puff">
          
             <div class="card px-2" style="width: 17rem;">
                <img src="images/1.jpg" class="card-img-top" alt="item1">
            <div class="card-body text-center">
        
           
        <h5 class="card-title">Nouveau Produit</h5>
        </br>
            <p class="card-text">New</p>
           
            <button type ="submit" name="ajouter" class="btn btn-warning">Ajouter</button>
        
           
  </div>


</div>
</form>
        </div>

        <div class="col-lg-3 mt-5 mx-4 mb-5">
            <form action="supprimer-produit.php" method="POST" name="puff">
          
             <div class="card px-2" style="width: 17rem;">
                <img src="images/1.jpg" class="card-img-top" alt="item1">
            <div class="card-body text-center">
        
           
        <h5 class="card-title">Supprimer un produit</h5>
        </br>
            <p class="card-text">On en veut plus</p>
           
            <button type ="submit" name="supprimer" class="btn btn-warning">Accéder</button>
        
           
  </div>


</div>
</form>
        </div>

   
</div>
    

</div>


    <?php require_once("footer.php")?>
</body>
</html>