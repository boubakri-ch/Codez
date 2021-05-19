<?php

require "C:/wamp64/www/web/core/panierOps.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_1="SELECT `code_commande`, `date_c`, `id_client`, `adresse` FROM `entete_commande` where  entete_commande.id_client like '%$search%' ";
$db = config::getConnexion();
$liste=$db->query($sql_1);

}
$output="
<tr>

<th>Code commande  </th>
<th>id client</th>
<th>Date</th>
<th>total</th>
<th>adresse</th>


</tr>";
foreach($liste as $com){

    $sql2="select SUM(commande.prix)as total from commande where commande.code_commande=".$com['code_commande'];
    $liste_1=$db->query($sql2);
    foreach($liste_1 as $t){

    $output.="
    <tr>
    <td>". $com['code_commande']."</td>
    <td>".$com['id_client']."</td>
    <td>".$com['date_c']."</td>
        <td>".$t['total']."</td>  

    <td>".$com['adresse']."</td>    
    
<td>
	<a class=supprimer href=supprimer_commande.php?id=".$com['code_commande'].">Supprimer</a>
    <a class=afficher href=afficher_commande_prod.php?id=".$com['code_commande'].">afficher les produits</a>

</td>
					

</tr>
    ";
}}
echo $output;

?>