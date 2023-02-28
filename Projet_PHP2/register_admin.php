<?php 
require_once('variables.php');
session_start();
//session_start();
/*  Se connecter à la base de données */
//echo "Je suis connecté";
//echo $_POST["admin_login"];
//echo $_POST["admin_password"];
$dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
//condition de inscription avec la base de donnée si "envoyer" est cliquer
if(isset($_POST["envoyer"])){
    //echo "Je suis connecté 1";
    //si les variables est considérée comme vide ou comme vide si elle n'existe pas, ou si sa valeur équivaut à false
    if(!empty($_POST["admin_login"]) and !empty($_POST["admin_password"])){
        //echo "Je suis connecté 2";
        //déclaration de la variable pseudo et incrémentation avec cryptage htmlspecialchars de celle-ci
        $admin_login = htmlspecialchars($_POST["admin_login"]);
        //déclaration de la variable mdp et incrémentation avec cryptage sha1 de celle-ci
        $admin_password = $_POST["admin_password"];
        //$admin_password = sha1($_POST["admin_password"]);

        //déclaration de la variable sql incrémentation de celle-ci avec la variable dbh qui prépare la requête SQL SELECT
        $sql = $dbh->prepare("INSERT INTO `admin`(`admin_login`, `admin_password`) VALUES (?, ?)");
        //éxution de la requête avec un tableau contenant toutes les variables
        $sql->execute(array($admin_login, $admin_password));
        //Condition pour récupérer Nom et mot de passe
        if($sql->rowCount() > 0){
            $_SESSION["admin_login"] = "admin_login";
            $_SESSION["admin_password"] = $sql->fetch()["admin_password"];
            header('Location: admin-log.php');
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
  <title>Connexion</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div class="container">
    <div class="myform">
      <form method="POST" action="">
        <h2>Création administrateur </h2>
        <input type="text" name="admin_login" placeholder="admin_login" required="required">
        <input type="password" name="admin_password" placeholder="admin_password" required="required">
        <button type="submit" name="envoyer"> Créer </button>
      </form>
    </div>
    <div class="image">
      <img src="images/passion.jpg">
    </div>
  </div>

</body>
</html>