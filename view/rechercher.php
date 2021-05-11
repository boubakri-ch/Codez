<?php

require "C:/wamp64/www/web/core/livraisonOps.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_1="SElECT `id`,`id_client`,`adresse`,`num_commande`,`date_l`,`livreur`.`prenom` From livraison,livreur where livreur.code_livreur = livraison.code_livreur and livreur.prenom like '%$search%' ";
$db = config::getConnexion();
$liste=$db->query($sql_1);

}

$output="
<tr>

				<th>id livraison </th>
				<th>code_client</th>
                <th>prenom livreur</th>
				<th>adresse</th>
                <th>num commande</th>
				<th>date</th>
				


			</tr>";
foreach($liste as $product){
   
    $output.="
    <tr>
    <td>".$product['id']."</td>
   
    <td>".$product['id_client']."</td>
    <td>".$product['prenom']."</td>
    <td>".$product['adresse']."</td>
    <td>".$product['num_commande']."</td>
    <td>".$product['date_l']."</td>
       



<td>
     <a class=supprimer href=supprimer_livraison.php?id=".$product['id'].">Supprimer</a>
     <a class=modifier href=modifier_livraison.php?id_modif=".$product['id'].">Modifier</a>
</td>
                    

</tr>
    ";
}
echo $output;