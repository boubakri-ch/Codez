
	<?php
	 include "php/read.php";
     include 'config.php';

	 $sql="SELECT id,nom,prenom,fonction from chef";
	 $dbconnect = config::getConnexion();
	 $liste=$dbconnect->query($sql );
 	
 //	$alpha=$_POST['excel'];
//	$req->execute(array($_POST['excel']));
						$tab='';
						$tab.='
						<table class="table-affichage ">
						<tr>
							<th>id</th>
							<th>nom</th>
							<th>prenom</th>
							<th>fonction</th>
							
							

						</tr> ';
						
						foreach($liste as $chef)
						{
							$tab.='<tr>
								<td>'.$chef["id"].'</td>
								<td>'.$chef["nom"].'</td>
								<td>'.$chef["prenom"].'</td>
								<td>'.$chef["fonction"].'</td>
								
								
							</tr>';
							
						}
						$tab.='<tr>
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
