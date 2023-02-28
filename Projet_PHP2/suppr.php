<?php 
require_once("variables.php");
require_once("header.php");






    if (isset($_POST["puff-id"]) || (isset($_POST["puff-id"]) != null ))
    {

    

    
        $produit_id = $_POST['puff-id'];

        $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        $sql = " DELETE FROM `produits` WHERE `produits`.`id` = $produit_id ";
        $resultat = $dbh->query($sql);
        echo"<script>
        alert('produit supprimé');
        window.location.href='supprimer-produit.php';
        </script>";



    }



    if (isset($_POST["ajout-puff"]) && $_POST['nom_produit'] !=null && $_POST["prix_promo"] != 0 )
{

 
    $nom =$_POST['nom_produit'];
    $prix =$_POST["prix_promo"];
    $picture = $_FILES['picture'];

    $dbh = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    $sql = "INSERT INTO`produits`(`id`,`nom`,`prix`,`promo`,`prix_promo`,`photo`,`picture`)VALUES(NULL,'$nom','8','1','$prix','1','images/4.jpg')";
    $resultat = $dbh->query($sql);



    echo"<script>
    alert('produit ajouté');
    window.location.href='ajouter-produit.php';
    </script>";
   
} else{

    if (!isset($_POST["puff-id"])){

    header('Location:ajouter-produit.php');
    exit;
    }
}








$dbh = null;
require_once("footer.php");
?>