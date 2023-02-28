<?php 
require_once('variables.php');
//session_start();
/*  Se connecter à la base de données */
//echo "Je suis connecté";
//echo $_POST["nom"];
//echo $_POST["mdp"];
$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
//condition de inscription avec la base de donnée si "envoyer" est cliquer
if(isset($_POST["envoyer"])){
    //echo "Je suis connecté 1";
    //si les variables est considérée comme vide ou comme vide si elle n'existe pas, ou si sa valeur équivaut à false
    if(!empty($_POST["nom"]) and !empty($_POST["mdp"])){
        //echo "Je suis connecté 2";
        //déclaration de la variable pseudo et incrémentation avec cryptage htmlspecialchars de celle-ci
        $nom = htmlspecialchars($_POST["nom"]);
        //déclaration de la variable mdp et incrémentation avec cryptage sha1 de celle-ci
        $mdp = sha1($_POST["mdp"]);
        //déclaration de la variable sql incrémentation de celle-ci avec la variable dbh qui prépare la requête SQL SELECT
        $sql = $dbh->prepare("SELECT * FROM user WHERE nom = ? AND mdp= ?");
        //éxution de la requête avec un tableau contenant toutes les variables
        $sql->execute(array($nom, $mdp));
        //Condition pour récupérer Nom et mot de passe
        if($sql->rowCount() > 0){
            $_SESSION["nom"] = "nom";
            $_SESSION["mdp"] = "mdp";
            $_SESSION["id"] = $sql->fetch()["id"];
            header('Location: index.php');
        }else{
            echo "Votre nom ou mot de passe est incorrect";
        }
    }else{
      echo "Veuillez remplir tous les champs";
    }
}

/* déconnexion de la base de données */
$dbh = null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>s'identifier</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div class="container">
    <div class="myform">
      <form method="POST" action="">
        <h2>S'identifier</h2>
        <p>Nom:</p>
            <input type="text" name="nom" placeholder="Entrez votre nom" required="required">
            <br>
            <p>Mot de passe:</p>
            <input type="password" name="mdp" placeholder="Entrez votre Mot de passe" required="required">
            <br><br>
            <button input type="submit" name="envoyer">Envoyer</button>
      </form>
    </div>
    <div class="image">
      <img src="images/passion.jpg">
    </div>
  </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="centrer"><?php require_once("footer.php")?></div>
</body>
</html>
  


