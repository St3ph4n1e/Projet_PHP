<?php
require_once("header.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Panier</title>
</head>
<body>
    <div class="container">
        <div class="row"> 
            <div class="col-lg-12 text-center border rounded bg-secondary mt-5 ">
                <h1> Mon panier </h1>
            </div>
            <div class="col-lg-9"> 
                <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">PRODUIT</th>
                        <th scope="col">PRIX</th>
                        <th scope="col">QUANTITE</th>
                        <th scope="col">TOTAL</th>
            
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $total = 0;
                        if(isset($_SESSION["panier"])){
                            foreach($_SESSION["panier"] as $key => $value){
                               
                                $quant = $key+1;
                                $total += $value["prix"];
                                echo'
                                <tr>
                                <td><div "><img style="width: 2.7rem; "height: 2.7rem; src="'.$value["picture"].'"></div></td>
                                <td>'.$value["nom_produit"].'</td>
                                <td>'.$value["prix"].'.00€<input type="hidden" class="prix_produit" value="'.$value["prix"].'"></td>
                                <td><input class="text-center quantite_produit" onChange="sousTotal()" type="number" value ="'.$value["Quantité"].'" min="1" max="10"></td>
                                <td class="total_produit"> .00€ </td>
                                <form action="gestion-panier.php" method="POST" name="supprimer">
                                <td><button type ="submit" name="supprimer" class="btn btn-sm btn-outline-warning"> Supprimer </button></td>
                                <input type="hidden" name="nom_produit" value="'.$value["nom_produit"].'">
                                </form>
                                </tr>';
    
                            }
                        }
                       
                        ?>
                      
                 </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light-rounded p-4">
                <h4> TOTAL:</h4>
                <p class="text-center" id="pTotal"> <?php echo $total.'.00 €' ?> </p>
                <form>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           Livraison en point Relais
                        </label>
                       
                 </div>
                 <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                           Livraison à domicile
                        </label>
                       
                 </div>
                      
                    <button class="btn btn-outline-warning btn-block"> Commander </button>
                </form>
                    </div>
            </div>
           
        </div>
     
    </div>
   
  
   

<script> 

let tprix = document.getElementsByClassName('prix_produit');
let tquant = document.getElementsByClassName('quantite_produit');
let totalP = document.getElementsByClassName('total_produit');
let gtotal = document.getElementById('pTotal');

function sousTotal()
{

    gt=0;
for(i=0;i<tprix.length;i++)
{

    totalP[i].innerText=(tprix[i].value)*(tquant[i].value)+".00 €";
    gt=gt+(tprix[i].value)*(tquant[i].value);

}
gtotal.innerText=gt+".00 €";
}

sousTotal();

</script>
<?php include("footer.php")?>  
</body>

</html>