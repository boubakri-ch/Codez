<?php
    require "C:/wamp64/www/web/core/clientOps.php";
    require "C:/wamp64/www/web/mpdf/vendor/autoload.php";
	 $sql="SELECT * from client";
	 $db = config::getConnexion();
	 $liste=$db->query($sql );
 	     
            $html='';
            $html.='

            
            
            <img class="normal-logo" src="C:/wamp64/www/web/view/logo.png" itemprop="logo" style="width: 600px; height: 300px;  ">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div style="text-align:center">Voici <p>La Liste des Clients.</p></div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <table border=1 align= "center" class="liste_clients ">
            <tr>
            
                
            <th>Code Client</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            
                

            </tr> ';
            foreach($liste as $client)
						{
							$html.='<tr>
                            <td>'.$client["code_client"].'</td>
                            <td>'.$client["nom"].'</td>
                            <td>'.$client["prenom"].'</td>
                            <td>'.$client["email"].'</td>
                            
                            
                        </tr>';
							
						}
                        $html.='<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						
						</tr>';
						$html.='</table>';
                    
                        $mpdf = new \Mpdf\Mpdf();
                        $mpdf->WriteHTML($html);
                        $mpdf->Output('client.pdf','D');

            ?>