<?php
    require "C:/wamp64/www/web/core/commandeOps.php";
    require "C:/wamp64/www/web/vendor/autoload.php";
	 $sql="SELECT * from commande";
	 $db = config::getConnexion();
	 $liste=$db->query($sql );
 	     
            $html='';
            $html.='


            <table border=1 class="liste_commande ">
            <tr>
                
            <th>Code Commande</th>
            <th>Nom Commande</th>
            <th>Prix</th>
            <th>Etat</th>
                

            </tr> ';
            foreach($liste as $commande)
						{
							$html.='<tr>
                            <td>'.$commande["code_commande"].'</td>
                            <td>'.$commande["nom_commande"].'</td>
                            <td>'.$commande["prix"].'</td>
                            <td>'.$commande["etat"].'</td>
                           
                            
                        </tr>';
							
						}
                        $html.='<tr>
						<td></td>
						<td></td>
						
						
						</tr>';
						$html.='</table>';
                    
                        $mpdf = new \Mpdf\Mpdf();
                        $mpdf->WriteHTML($html);
                        $mpdf->Output('commande.pdf','D');

            ?>