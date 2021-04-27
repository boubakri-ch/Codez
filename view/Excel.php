
	<?php
	 include ("../core/livraisonOps.php");
	 $sql="SELECT id,id_client,adresse,num_commande,date_l from livraison";
	 $db = config::getConnexion();
	 $liste=$db->query($sql );
 	
 //	$alpha=$_POST['excel'];
//	$req->execute(array($_POST['excel']));
						$tab='';
						$tab.='
						<table class="table-affichage ">
						<tr>
							<th>ID</th>
							<th>ID Client</th>
							<th>Adresse</th>
							<th>Numero commande</th>
							<th>Date</th>
							

						</tr> ';
						
						foreach($liste as $livreur)
						{
							$tab.='<tr>
								<td>'.$livreur["id"].'</td>
								<td>'.$livreur["id_client"].'</td>
								<td>'.$livreur["adresse"].'</td>
								<td>'.$livreur["num_commande"].'</td>
								<td>'.$livreur["date_l"].'</td>
								
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
						header('Content-Disposition: attachment; filename="livraison.xls"');
						echo $tab;
					?>
