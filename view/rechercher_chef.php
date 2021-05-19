<?php

require "C:/wamp64/www/web/core/chefOps.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_1="select * from chef where nom like '%$search%' ";
$db = config::getConnexion();
$liste=$db->query($sql_1);

}

$output="
<tr>

				<th>id </th>
				<th>nom</th>
                <th>prenom</th>
				<th>fonction</th>
                
				
				


			</tr>";
foreach($liste as $product){
   
    $output.="
    <tr>
    <td>".$product['id']."</td>
   
    <td>".$product['nom']."</td>
    <td>".$product['prenom']."</td>
    <td>".$product['fonction']."</td>
   
       



<td>
<a href=supprimer_chef.php?id= ".$product['id'].">Supprimer</a>
<a class=modifier href=modifier_chef.php?id_modif=".$product['id'].">Modifier</a>
</td>
                    

</tr>
    ";
}
echo $output;