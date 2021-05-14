<?php
    require "C:/wamp64/www/web/core/reclamationOps.php";
    require "C:/wamp64/www/web/vendor/autoload.php";
	 $sql="SELECT * from reclamation";
	 $db = config::getConnexion();
	 $liste=$db->query($sql );
 	     
            $html='';
            $html.='


            <table border=1 class="liste_reclamation ">
            <tr>
                
            <th>Code Reclamation</th>
            <th>Description</th>
            
            
                

            </tr> ';
            foreach($liste as $reclamation)
						{
							$html.='<tr>
                            <td>'.$reclamation["code_rec"].'</td>
                            <td>'.$reclamation["descrip"].'</td>
                           
                            
                        </tr>';
							
						}
                        $html.='<tr>
						<td></td>
						<td></td>
						
						
						</tr>';
						$html.='</table>';
                    
                        $mpdf = new \Mpdf\Mpdf();
                        $mpdf->WriteHTML($html);
                        $mpdf->Output('reclamation.pdf','D');

            ?>