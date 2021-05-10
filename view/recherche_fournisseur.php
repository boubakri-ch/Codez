<?php

require "C:/wamp64/www/projet/core/fournisseurOps.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_1="SELECT *  FROM fournisseur WHERE fournisseur.`nom` like '%$search%' ";
$db = config::getConnexion();
$liste=$db->query($sql_1);

}

$output="
<tr>

<th>id  </th>
<th>nom</th>
<th>adresse</th>
<th>numero</th>
<th>image</th>



</tr>";
foreach($liste as $f){
   
    $output.="
    <tr>
    <td>".$f['id_fournisseur']."</td>
    <td>".$f['nom']."</td>
    <td>".$f['adresse']."</td>
    <td>" 
    .$f['numero'].
    "</td>  
    <td> <img src=data:image/;base64,".base64_encode($f['image'])." height=200px width=200px></td>  



<td>
	 <a class=supprimer href=supprimer_fournisseur.php?id=".$f['id_fournisseur'].">Supprimer</a>
	 <a class=modifier href=modifier_fournisseur.php?id_modif=".$f['id_fournisseur'].">Modifier</a>
</td>
					

</tr>
    ";
}
echo $output;

