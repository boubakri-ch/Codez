
	<?php
	 include ("../core/chefOps.php");
	 $sql="SELECT id,nom,prenom,fonction from chef";
	 $db = config::getConnexion();
	 $liste=$db->query($sql );
 	
 //	$alpha=$_POST['excel'];
//	$req->execute(array($_POST['excel']));
						$tab='';
						$tab.='
						<table class="table-affichage ">
						<tr>
							<th>ID</th>
							<th>nom</th>
							<th>prenom</th>
							<th>fonction</th>
							
							

						</tr> ';
						
						foreach($liste as $chef)
						{
							$tab.='<tr>
								<td>'.$livreur["id"].'</td>
								<td>'.$livreur["nom"].'</td>
								<td>'.$livreur["prenom"].'</td>
								<td>'.$livreur["fonction"].'</td>
								
								
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
						header('Content-Disposition: attachment; filename="chef.xls"');
						echo $tab;
					?>
