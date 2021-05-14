<?php
    require "C:/wamp64/www/web/core/reclamationOps.php";
     $sql="SELECT * from reclamation";
     $db = config::getConnexion();
     $liste=$db->query($sql );
    
 // $alpha=$_POST['excel'];
//  $req->execute(array($_POST['excel']));
                        $tab='';
                        $tab.='
                        <table class="liste_reclamation ">
                        <tr>
                            
                        <th>Code Reclamation</th>
                        <th>Description</th>
                      
                            

                        </tr> ';
                        
                        foreach($liste as $reclamation)
                        {
                            $tab.='<tr>
                                <td>'.$reclamation["code_rec"].'</td>
                                <td>'.$reclamation["descrip"].'</td>
                              
                                
                            </tr>';
                            
                        }
                        $tab.='<tr>
                        <td></td>
                        <td></td>
                        
                        
                        </tr>';
                        $tab.='</table>';


                        header('Content-Type: text/xls;');
                        header('Content-Disposition: attachment; filename="reclamatinn.xls"');
                        echo $tab;
                    ?>