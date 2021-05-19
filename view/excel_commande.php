
	<?php
	 include ("../core/panierOps.php");
	 $sql="SELECT code_commande,id_client,date_c,adresse from entete_commande";
	 $db = config::getConnexion();
	 $liste=$db->query($sql );
 	
 //	$alpha=$_POST['excel'];
//	$req->execute(array($_POST['excel']));
						$tab='';
						$tab.='
						<table class="table-affichage ">
						<tr>
							<th>Code commande</th>
							<th>id client</th>
							<th>Date</th>
							<th>Adresse</th>
							
							

						</tr> ';
						
						foreach($liste as $livreur)
						{
							$tab.='<tr>
								<td>'.$livreur["code_commande"].'</td>
								<td>'.$livreur["id_client"].'</td>
								<td>'.$livreur["date_c"].'</td>
								<td>'.$livreur["adresse"].'</td>
								
								
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
						header('Content-Disposition: attachment; filename="Commande.xls"');
						echo $tab;
					?>
