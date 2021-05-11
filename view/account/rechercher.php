<?php

require "C:/wamp64/www/web/core/clientOps.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_1="SELECT *  FROM client WHERE  `nom` like '%$search%' ";
$db = config::getConnexion();
$liste=$db->query($sql_1);

}

$output="
<tr>

    <th>Code Client</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Password</th>
    


</tr>";
foreach($liste as $client){
   
    $output.="
    <tr>
    <td>".$client['code_client']."</td>
    <td>".$client['nom']."</td>
    <td>".$client['prenom']."</td>
    <td>".$client['email']."</td>    
    <td>".$client['password_c']." </td>

<td>
	 <a class=supprimer href=supprim_client.php?id=".$client['code_client'].">Supprimer</a>
	 <a class=modifier href=modif_client.php?id_modif=".$client['code_client'].">Modifier</a>
</td>
					

</tr>
    ";
}
echo $output;

