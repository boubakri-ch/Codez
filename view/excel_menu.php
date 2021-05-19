
	<?php
	 include ("../core/menuOps.php");
	 $sql="SELECT id,nom ,prix,ingredient from menu";
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
 							<th>prix</th>
							<th>ingredient</th>
							
							

						</tr> ';
						
						foreach($liste as $menu)
						{
							$tab.='<tr>
								<td>'.$menu["id"].'</td>
								<td>'.$menu["nom"].'</td>
 								<td>'.$menu["prix"].'</td>
								<td>'.$menu["ingredient"].'</td>
								
								
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
						header('Content-Disposition: attachment; filename="menu.xls"');
						echo $tab;
					?>
