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
        
    include "../core/livraisonOps.php";
    
  
    $p = new livraisonOps();
    $liste = $p->selectproduit($_GET['id']);

   
    foreach($liste as $row){
?>
        <form class="form-box" id="form-product" method="POST" action="valid_modif_livraison.php" enctype="multipart/form-data">
        <h1>Modifier une livraison</h1>
        <div  data-errormsg="">
                                        <input type="text" name="id" id="input-id" value="<?php echo $row['id']; ?>" autofocus placeholder="id" tabindex="1" readonly />
                                    </div>
                                     <div  data-errormsg="">
                                        <input type="text" name="id_client" id="input-id" value="<?php echo $row['id_client']; ?>" autofocus placeholder="id client" tabindex="2" />
                                    </div>
                                    <div  data-errormsg="">
                                        <input  type="text" name="adresse" id="input-adresse" value="<?php echo $row['adresse']; ?> "autofocus placeholder="adresse " tabindex="3" />
                                    </div>
                                    <div  data-errormsg="">
                                        <input type="text" name="num_c" id="input-num_c" value="<?php echo $row['num_commande']; ?>"autofocus placeholder="numéro de commande" tabindex="4" />
                                    </div>
                                    <div  data-errormsg="">
                                    <input type="date" name="nom" id="input-nom" value="<?php echo $row['date_l']; ?>"   tabindex="2" />
                                        <?php echo date ('d/m/Y',strtotime($row['date_l'])); ?>
                                    </div>
       
    
      
     
    
        <div>
            <button  class="ajouter" id="button-ajouter" >Modifier</button>
            <button class="cancel"id="button-cancel-prod">Annuler</button>
        </div>

 </form>
 <script src="./product.js"></script> 

 <?php
    }
?>

            </div><!-- .content -->

            <div class="clearfix"></div>

            <footer class="site-footer">
                <div class="footer-inner bg-white">
                    <div class="row">
                        <div class="col-sm-6">
                            Copyright &copy; chiheb boubakri
                        </div>
                      
                    </div>
                </div>
            </footer>


        </div><!-- /#right-panel -->

        <!-- Right Panel -->
 


    </body>
    </html>
