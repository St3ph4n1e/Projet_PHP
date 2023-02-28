<?php
session_start();

/*  Se connecter à la base de données 
echo "Je suis connecté";
echo $_POST["nom"];
echo $_POST["mdp"];
$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
if(isset($_POST["envoyer"])){
    echo "Je suis connecté 1";
    if(!empty($_POST["pseudo"]) AND !empty($_POST["mdp"])){
        
        $nom = htmlspecialchars($_POST["pseudo"]);
        $mdp = sha1($_POST["mdp"]);
        $sql = $dbh->prepare("INSERT INTO member(`pseudo`, `mdp`) VALUES (?, ?)");
        $stmt->execute([$_POST["pseudo"], $_POST["mdp"]]);
    }else{
        "veuillez remplire tous les champs!";
    }
}*/

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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sweetpuff</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <form action="recherche.php" method="POST" name="recherche" class="d-flex">
        <input class="form-control me-2" type="search" name="valeur-recherche" placeholder="Que cherchez-vous ?" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="puff.php">Nos puffs</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Catégories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Fruits</a></li>
            <li><a class="dropdown-item" href="#">CBD</a></li>
            <li><a class="dropdown-item" href="#">Taux de Nicotine</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="connexion.php" tabindex="-1" aria-disabled="true">Se connecter <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg></a>
        </li>
      </ul>

    </div>
    <div> 
        <?php 

        $compte = 0;

        if(isset($_SESSION["panier"]))
        {
    
            $compte = count($_SESSION["panier"]);

        }
        
        ?>
        <a href="panier.php" class="btn btn-outline-success">Panier (<?php echo $compte ?>)</a>
    </div>
  </div>
</nav>
<div class="container">
  <!-- index.php -->
  <form method="POST" action="">
            <input type="text" name="nom" value="" required ="required">
        
            <br>
            <input type="password" name="mdp" value="" required ="required">
          
            <br><br>
            <input type="submit" name="envoyer">
        </form>
        <div class="card border-warning mb-3 mx-auto" style="max-width: 18rem;">
  <div class="card-header text-center "> Se connecter</div>
  <div class="card-body mx-auto">
            
            <p class="card-text "> 
            <div class="input-group mb-3  " >
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3 ">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg></span>
                <input type="text" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1">
                </div>
                <button type="button" class="btn btn-warning "> Soumettre </button>
            </p>
            
          
   
  </div>
</div>

</div>
<?php require_once("footer.php")?>
</body>
</html>
 