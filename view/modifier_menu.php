<?php include_once "header.php"; ?>

<!doctype html>
 

        <?php   
        
        require "C:/wamp64/www/web/core/menuOps.php";
 
  
    $p = new menuOps();
    $liste = $p->selectmenu($_GET['id_modif']);

   
    foreach($liste as $row){
?>
        <form class="form-box" id="form-menu" method="POST" action="validmodif_menu.php" enctype="multipart/form-data">
        <h1>Modifier un client</h1>

        <div  data-errormsg="">
            <input type="text" name="id_menu" id="input-id" value="<?php echo $row['id']; ?>" readonly tabindex="1" />
        </div>
        <div  data-errormsg="">
            <input type="text" name="nom" id="input-nom" value="<?php echo $row['nom']; ?>"  tabindex="3" />    
        </div>
       
        <div  data-errormsg="">
            <input type="text" name="prix" id="input-prix" value="<?php echo $row['prix']; ?>"  tabindex="3" />    
        </div>
      
        <div  data-errormsg="">
            <input type="text" name="ingredient" id="input-ingredient" value="<?php echo $row['ingredient']; ?>"  tabindex="4" />    
        </div>  
        
      
      
       
        <div>
            <button  class="ajouter" id="button-ajouter">Modifier</button>
            <button class="cancel"id="button-cancel">Annuler</button>
        </div>

 </form>
 <script src="menu.js"></script> 

 <?php
    }
?>

            </div><!-- .content -->

            <div class="clearfix"></div>

            <footer class="site-footer">
                <div class="footer-inner bg-white">
                    <div class="row">
                        <div class="col-sm-6">
                         </div>
                      
                    </div>
                </div>
            </footer>


        </div><!-- /#right-panel -->

        <!-- Right Panel -->
    
    </body>
    </html>
