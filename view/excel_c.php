<?php
    require "C:/wamp64/www/web/core/commandeOps.php";
     $sql="SELECT * from commande";
     $db = config::getConnexion();
     $liste=$db->query($sql );
    
 // $alpha=$_POST['excel'];
//  $req->execute(array($_POST['excel']));
                        $tab='';
                        $tab.='
                        <table class="liste_commande ">
                        <tr>
                            
                        <th>Code Commande</th>
                        <th>Nom Commande</th>
                        <th>Prix</th>
                        <th>Etat</th>
                            

                        </tr> ';
                        
                        foreach($liste as $commande)
                        {
                            $tab.='<tr>
                                <td>'.$commande["code_commande"].'</td>
                                <td>'.$commande["nom_commande"].'</td>
                                <td>'.$commande["prix"].'</td>
                                <td>'.$commande["etat"].'</td>
                                
                            </tr>';
                            
                        }
                        $tab.='<tr>
                        <td></td>
                        <td></td>
                        
                        
                        </tr>';
                        $tab.='</table>';


                        header('Content-Type: text/xls;');
                        header('Content-Disposition: attachment; filename="commande.xls"');
                        echo $tab;
                    ?>