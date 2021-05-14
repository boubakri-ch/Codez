<?php

require "C:/wamp64/www/web/core/commandeOps.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_1="SELECT *  FROM commande WHERE  `code_commande` like '%$search%' ";
$db = config::getConnexion();
$liste=$db->query($sql_1);

}

$output="
<tr>

    <th>Code Commande</th>
    <th>Nom Commande</th>
    <th>Prix</th>
    <th>Etat</th>
    


</tr>";
foreach($liste as $commande){
   
    $output.="
    <tr>
    <td>".$commande['code_commande']."</td>
    <td>".$commande['nom_commande']."</td>
    <td>".$commande['prix']."</td>
    <td>".$commande['etat']."</td>
    
<td>
	 <a class=supprimer href=supprimercom.php?id=".$commande['code_commande'].">Supprimer</a>
	 <a class=modifier href=modifier_commande.php?id_modif=".$commande['code_commande'].">Modifier</a>
</td>
					

</tr>
    ";
}
echo $output;

