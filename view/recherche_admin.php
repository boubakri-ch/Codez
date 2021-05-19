<?php

require "C:/wamp64/www/web/core/loginOps.php";

$db = config::getConnexion();

$output='';

if(isset($_POST['query'])){
$search=$_POST['query'];

$sql_1="SELECT `user_id`,`unique_id`,`fname`,`lname`,`email`,`etat` FROM `users` where `type_c`='admin' and users.`fname` like '%$search%' ";
$db = config::getConnexion();
$liste=$db->query($sql_1);

}
$output="
<tr>

<th>id utilisateur  </th>
<th>id unique</th>
<th>nom</th>
<th>prenom</th>
<th>email</th>
<th>statut</th>
<th>etat</th>


</tr>";
foreach($liste as $admin){
   
    $output.="
    <tr>
    <td>". $admin['user_id']."</td>
    <td>".$admin['unique_id']."</td>
    <td>".$admin['fname']."</td>
    <td>".$admin['lname']."</td>    
    <td>".$admin['fname']."</td>
    <td>".$admin['email']."</td>
    <td>".$admin['etat']."</td>
<td>
	<a class=supprimer href=supprimer_admin.php?id=".$admin['user_id'].">Supprimer</a>
</td>
					

</tr>
    ";
}
echo $output;

?>