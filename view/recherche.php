<?php

require "C:/wamp64/www/web/core/reclamationOps.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_1="SELECT *  FROM reclamation WHERE  `code_rec` like '%$search%' ";
$db = config::getConnexion();
$liste=$db->query($sql_1);

}

$output="
<tr>

    <th>Code Reclamtiont</th>
    <th>Description</th>
    


</tr>";
foreach($liste as $reclamation){
   
    $output.="
    <tr>
    <td>".$reclamation['code_rec']."</td>
    <td>".$reclamation['descrip']."</td>
    
<td>
	 <a class=supprimer href=supprimer_rec.php?id=".$reclamation['code_rec'].">Supprimer</a>
	 <a class=modifier href=modifier_rec.php?id_modif=".$reclamation['code_rec'].">Modifier</a>
</td>
					

</tr>
    ";
}
echo $output;

