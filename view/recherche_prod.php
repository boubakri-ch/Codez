<?php

require "C:/wamp64/www/web/core/produitOps.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_1="SELECT `code_produits`,`description`,`image_produit`,`prix`,`nom`,`categorie`.`libelle`  FROM produit,categorie WHERE produit.code_categorie=categorie.code_categorie and produit.`nom` like '%$search%' ";
$db = config::getConnexion();
$liste=$db->query($sql_1);

}

$output="
<tr>

    <th>Code produit</th>
    <th>Image</th>
    <th>nom</th>
    <th>description</th>
    <th>Catégorie</th>
    <th>Prix</th>


</tr>";
foreach($liste as $product){
   
    $output.="
    <tr>
    <td>".$product['code_produits']."</td>
    <td> <img src=data:image/;base64,".base64_encode($product['image_produit'])." height=200px width=200px></td>
    <td>".$product['nom']."</td>
    <td>".$product['description']."</td>
    <td>" 
    .$product['libelle'].
    "</td>    

<td>".$product['prix']." TND</td>

<td>
	 <a class=supprimer href=supprimer_produit.php?id=".$product['code_produits'].">Supprimer</a>
	 <a class=modifier href=modifier_article.php?id_modif=".$product['code_produits'].">Modifier</a>
</td>
					

</tr>
    ";
}
echo $output;

?>