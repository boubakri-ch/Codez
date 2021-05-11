<?php
	require "C:/wamp64/www/web/core/clientOps.php";
	 $sql="SELECT * from client";
	 $db = config::getConnexion();
	 $liste=$db->query($sql );
 	
 //	$alpha=$_POST['excel'];
//	$req->execute(array($_POST['excel']));
						$tab='';
						$tab.='
						<table class="liste_admin ">
						<tr>
							
                        <th>Code client</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        
							

						</tr> ';
						
						foreach($liste as $client)
						{
							$tab.='<tr>
								<td>'.$client["code_client"].'</td>
								<td>'.$client["nom"].'</td>
								<td>'.$client["prenom"].'</td>
								<td>'.$client["email"].'</td>
								
								
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
						header('Content-Disposition: attachment; filename="client.xls"');
						echo $tab;
					?>