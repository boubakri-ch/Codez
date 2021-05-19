<?php include_once "header.php"; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="eng"> <!--<![endif]-->
 
<body>
    <!-- Left Panel -->

    

        <div class="content">

        <?php   
        
        require "C:/wamp64/www/web/core/panierOps.php";
 
  
    $p = new panierOps();
    $liste = $p->select_commande_modifier($_GET['id']);

   
    foreach($liste as $row){
?>
        <form class="form-box" id="form-product" method="POST" action="validmodif_commande.php" enctype="multipart/form-data">
        <h1>Modifier un produit</h1>

        <div  data-errormsg="">
            <input type="text" name="code_commande" id="input-id" value="<?php echo $row['code_commande']; ?>" readonly tabindex="1" />
        </div>
        <div  data-errormsg="">
            <input type="text" name="id_client" id="input-nom" value="<?php echo $row['id_client']; ?>" readonly tabindex="2" />
        </div>
        <div  data-errormsg="">
        <input type="date" name="date_c" id="input-nom" value="<?php echo $row['date_c']; ?>"  readonly  tabindex="2" />
        </div>
    
        <div data-errormsg="">
        <input type="text"  id="adresse" name="adresse" value="<?php echo $row['adresse']; ?>" tabindex="8" />

        </div>
 
        <div>
            <button  class="ajouter" id="button-ajouter" >Modifier</button>
            <button class="cancel"id="button-cancel-prod">Annuler</button>
        </div>

 </form>
 
 <?php
    }
?>

            </div><!-- .content -->

            <div class="clearfix"></div>

            <footer class="site-footer">
                <div class="footer-inner bg-white">
                    <div class="row">
                        <div class="col-sm-6">
                            Copyright &copy; Moatez Borgi
                        </div>
                      
                    </div>
                </div>
            </footer>


        </div><!-- /#right-panel -->

        <!-- Right Panel -->
 


    </body>
    </html>
