<?php
    require "C:/wamp64/www/web/core/adminOps.php";
    require "C:/wamp64/www/web/mpdf/vendor/autoload.php";
	 $sql="SELECT * from adminn";
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
            <div style="text-align:center">Voici <p>La Liste des Administrateurs.</p></div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <table border=1  align= "center" class="liste_admin ">
            <tr>
                
            <th>Code Admin</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            
                

            </tr> ';
            foreach($liste as $admin)
						{
							$html.='<tr>
                            <td>'.$admin["code_admin"].'</td>
                            <td>'.$admin["nom"].'</td>
                            <td>'.$admin["prenom"].'</td>
                            <td>'.$admin["email"].'</td>
                            
                            
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
                        $mpdf->Output('Admin.pdf','D');

            ?>