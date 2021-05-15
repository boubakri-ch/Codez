
	<?php
	 include ("../core/livreurOps.php");
	 $sql="SELECT code_livreur,nom,prenom,mail,num_tel from livreur";
	 $db = config::getConnexion();
	 $liste=$db->query($sql );
 	
 //	$alpha=$_POST['excel'];
//	$req->execute(array($_POST['excel']));
						$tab='';
						$tab.='
						<table class="table-affichage ">
						<tr>
							<th>Code livreur</th>
							<th>Nom livreur</th>
							<th>Prenom livreur</th>
							<th>Email du livreur</th>
							<th>Numéro de téléphone </th>
							

						</tr> ';
						
						foreach($liste as $livreur)
						{
							$tab.='<tr>
								<td>'.$livreur["code_livreur"].'</td>
								<td>'.$livreur["nom"].'</td>
								<td>'.$livreur["prenom"].'</td>
								<td>'.$livreur["mail"].'</td>
								<td>'.$livreur["num_tel"].'</td>
								
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
						header('Content-Disposition: attachment; filename="livreur.xls"');
						echo $tab;
					?>
