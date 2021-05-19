
	<?php
	 include ("../core/produitOps.php");
	 $sql="SELECT `code_produits`,`description`,`image_produit`,`prix`,`nom`,`categorie`.`libelle`  FROM produit,categorie WHERE produit.code_categorie=categorie.code_categorie";
	 $db = config::getConnexion();
	 $liste=$db->query($sql );
 	
 //	$alpha=$_POST['excel'];
//	$req->execute(array($_POST['excel']));
						$tab='';
						$tab.='
						<table class="table-affichage ">
						<tr>
					
    <th>Code produit</th>
    <th>Image</th>
    <th>nom</th>
    <th>description</th>
    <th>Catégorie</th>
    <th>Prix</th>


						</tr> ';
						
						foreach($liste as $reservation)
						{
							$tab.='<tr>
								<td>'.$reservation['code_produits'].'</td>
								<td>'.$reservation['description'].'</td>
								<td>'.$reservation['prix'].'</td>
								<td>'.$reservation['nom'].'</td>
                                <td> <img src=data:image/;base64,'.base64_encode($reservation['image_produit']).' height=200px width=200px></td>

                                <td>'.$reservation['libelle'].'</td>

								
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
						header('Content-Disposition: attachment; filename="produits.xls"');
						echo $tab;
					?>
