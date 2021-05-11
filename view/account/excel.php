<?php
	require "C:/wamp64/www/web/core/adminOps.php";
	 $sql="SELECT * from adminn";
	 $db = config::getConnexion();
	 $liste=$db->query($sql );
 	
 //	$alpha=$_POST['excel'];
//	$req->execute(array($_POST['excel']));
						$tab='';
						$tab.='
						<table class="liste_admin ">
						<tr>
							
                        <th>Code admin</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Role</th>
							

						</tr> ';
						
						foreach($liste as $admin)
						{
							$tab.='<tr>
								<td>'.$admin["code_admin"].'</td>
								<td>'.$admin["nom"].'</td>
								<td>'.$admin["prenom"].'</td>
								<td>'.$admin["email"].'</td>
								<td>'.$admin["role_a"].'</td>
								
							</tr>';
							
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
						header('Content-Disposition: attachment; filename="Admin.xls"');
						echo $tab;
					?>