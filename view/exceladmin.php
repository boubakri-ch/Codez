<?php

require "C:/wamp64/www/web/core/loginOps.php";

$db = config::getConnexion();



$sql_1="SELECT `user_id`,`unique_id`,`fname`,`lname`,`email`,`etat` FROM `users` where `type_c`='admin'  ";
$db = config::getConnexion();
$liste=$db->query($sql_1);

$tab='';
$tab.='
<table class="tab_admin ">
<tr>
<th>id utilisateur  </th>
<th>id unique</th>
<th>nom</th>
<th>prenom</th>
<th>email</th>
<th>statut</th>
<th>etat</th>


</tr> ';
foreach($liste as $admin){
   
    $tab.='<tr>
    <tr>
    <td>'. $admin['user_id'].'</td>
    <td>'.$admin['unique_id'].'</td>
    <td>'.$admin['fname'].'</td>
    <td>'.$admin['lname'].'</td>    
    <td>'.$admin['fname'].'</td>
    <td>'.$admin['email'].'</td>
    <td>'.$admin['etat'].'</td>

					
</tr>
    ';
}

$tab.='<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

</tr>';
$tab.='</table>';


header('Content-Type: text/xls;');
header('Content-Disposition: attachment; filename="admin.xls"');
echo $tab;

?>