
	<?php
	 include ("../core/reservationOps.php");
	 $sql="SELECT `code_reservation`, `date_reservation`, `num_pers`, `numero_tel`, `fournisseur`.`nom` FROM `reservation`,`fournisseur` WHERE fournisseur.id_fournisseur=reservation.id_fournisseur";
	 $db = config::getConnexion();
	 $liste=$db->query($sql );
 	
 //	$alpha=$_POST['excel'];
//	$req->execute(array($_POST['excel']));
						$tab='';
						$tab.='
						<table class="table-affichage ">
						<tr>
						<th>code_reservation</th>
				<th>nom</th>
				<th>num_pers</th>
                <th>date_reservation</th>
                <th>numero_tel</th>
							

						</tr> ';
						
						foreach($liste as $reservation)
						{
							$tab.='<tr>
								<td>'.$reservation['code_reservation'].'</td>
								<td>'.$reservation['nom'].'</td>
								<td>'.$reservation['num_pers'].'</td>
								<td>'.$reservation['date_reservation'].'</td>
								<td>'.$reservation['numero_tel'].'</td>
								
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
						header('Content-Disposition: attachment; filename="réservation.xls"');
						echo $tab;
					?>
