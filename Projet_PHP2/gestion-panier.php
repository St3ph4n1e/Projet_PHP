<?php
require_once("header.php"); 



    // vérification que ajout panier existe bien en méthode POST :
    if(isset($_POST["ajout_panier"]))
    {

        // Vérification de l'existence de la Session panier :
        if(isset($_SESSION["panier"]))
        {
            $articles = array_column($_SESSION["panier"],"nom_produit");

                if(in_array($_POST["nom_produit"],$articles)){

                    // Si dans la session panier l'artticle existe déjà 
                    // L'utilisateur ne peut l'ajouter
                    // la quantité est augmenté directement dans le panier

          
                    echo"<script>
                    alert('vous avez déjà ajouté cet article au panier');
                    window.location.href='index.php';
                    </script>";


                } else{

                    // Sinon un nouvel article est créé dans session panier :


                    $compteur = count($_SESSION["panier"]);
                    $_SESSION["panier"][$compteur] = array("picture"=>$_POST["picture"],"nom_produit"=>$_POST["nom_produit"],"prix"=>$_POST["prix"],'Quantité'=>1);
                    print_r($_SESSION["panier"]);
                    echo"<script>
                    alert('vous avez ajouté un article au panier');
                    window.location.href='index.php';
                    </script>";
                }

        } else{

            // Si la session panier n'existe pas, on crée un tableau associatif "panier" :

            $_SESSION["panier"][0] = array("picture"=>$_POST["picture"],"nom_produit"=>$_POST["nom_produit"],"prix"=>$_POST["prix"],'Quantité'=>1);
            print_r($_SESSION["panier"]);
            echo"<script>
            alert('vous avez ajouté un article au panier');
            window.location.href='index.php';
            </script>";
        }
    }

    // vérification de l'existence de la méthode Post "supprimer"
    if(isset($_POST["supprimer"]))
    {
        foreach($_SESSION["panier"] as $key => $value)
        {
            // si le produit est présent dans le panier :

           if($value["nom_produit"] == $_POST["nom_produit"]){

            // la ligne correspondante est supprimée :

                unset($_SESSION["panier"][$key]);
                $_SESSION["panier"]=array_values($_SESSION["panier"]);
                echo"<script>
                alert('article supprimé');
                window.location.href='panier.php';
                </script>";
            }
           
        }
    }




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once("footer.php")?>
</body>
</html>