<?php

require "C:/wamp64/www/web/core/adminOps.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_2="SELECT *  FROM adminn WHERE  `code_admin` like '%$search%' ";
$db = config::getConnexion();
$liste=$db->query($sql_2);

}

$output="
<tr>

    <th>Code Admin</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Password</th>
    <th>Role</th>

    


</tr>";
foreach($liste as $admin){
   
    $output.="
    <tr>
    <td>".$admin['code_admin']."</td>
    <td>".$admin['nom']."</td>
    <td>".$admin['prenom']."</td>
    <td>".$admin['email']."</td>    
    <td>".$admin['password_a']." </td>
    <td>".$admin['role_a']." </td>

<td>
	 <a class=supprimer href=supprim_admin.php?id=".$admin['code_admin'].">Supprimer</a>
	 <a class=modifier href=modif_admin.php?id_modif=".$admin['code_admin'].">Modifier</a>
</td>
					

</tr>
    ";
}
echo $output;

