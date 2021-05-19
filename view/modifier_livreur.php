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
        
    include "../core/livreurOps.php";
   
  
    $p = new livreurOps();
    $liste = $p->selectproduit($_GET['id']);

   
    foreach($liste as $row){
?>
        <form class="form-box" id="form-product" method="POST" action="valid_modif_livreur.php" enctype="multipart/form-data">
        <h1>Modifier un livreur</h1>
        <div  data-errormsg="">
                                        <input type="text" name="code_livreur" id="input-code_livreur" value="<?php echo $row['code_livreur']; ?>" autofocus placeholder="code livreur" tabindex="1" />
                                    </div>
                                     <div  data-errormsg="">
                                        <input type="text" name="nom" id="input-id" value="<?php echo $row['nom']; ?>" autofocus placeholder="Nom" tabindex="2" />
                                    </div>
                                    <div  data-errormsg="">
                                        <input  type="text" name="prenom" id="input-adresse" value="<?php echo $row['prenom']; ?> "autofocus placeholder="prenom " tabindex="3" />
                                    </div>
                                    <div  data-errormsg="">
                                        <input type="mail" name="mail" id="input-mail" value="<?php echo $row['mail']; ?>"autofocus placeholder="Mail" tabindex="4" />
                                    </div>
                                    <div  data-errormsg="">
                                        <input type="text" name="num_tel" id="input-num_tel" value="<?php echo $row['num_tel']; ?>"autofocus placeholder="numéro de telephone" tabindex="4" />
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
