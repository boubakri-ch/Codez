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
        
    include "C:/wamp64/www/web/core/fournisseurOps.php";
     
  
    $p = new fournisseurOps();
    $liste = $p->selectproduit($_GET['id']);

   
    foreach($liste as $row){
?>
        <form class="form-box" id="form-product" method="POST" action="valid_modif_fournisseur.php" enctype="multipart/form-data">
        <h1>Ajouter un fournisseur</h1>
        <div  data-errormsg="">
            <input type="text" name="id" id="input-id" autofocus placeholder="id" tabindex="1" value="<?php echo $row['id_fournisseur']; ?>" readonly />
        </div>
        <div  data-errormsg="">
            <input type="text" name="nom" id="input-nom" autofocus placeholder="nom" tabindex="1" value="<?php echo $row['nom']; ?>" />
        </div>
       
        <div  data-errormsg="">
            <input type="text" name="adresse" id="input-adresse" autofocus placeholder="adresse" tabindex="2"  value="<?php echo $row['adresse']; ?>" />
        </div>
   
     
        <div  data-errormsg="">
        <div image>
            <input type="file" name="image" id="input-image" onchange="showPreview(event);" tabindex="3" />
            <img class="preview"  id="preview" width="200" height="200" <?PHP echo 'src="data:image/;base64,'.base64_encode($row['image']).'"height="200px" width="200px"'; ?>>
            </div>
        </div>
   
      <div  data-errormsg="">
            <input type="text" name="numero" id="input-numero" autofocus placeholder="numero" tabindex="2"  value="<?php echo $row['numero']; ?>" />
        </div>
     
        <div>
            <button  class="ajouter" id="button-ajouter">modifier</button>
            <button class="cancel"id="button-cancel-prod">Annuler</button>
        </div>

 </form>
 <script src="./fournisseur.js"></script> 

 <?php
    }
?>

            </div><!-- .content -->

            <div class="clearfix"></div>

            <footer class="site-footer">
                <div class="footer-inner bg-white">
                    <div class="row">
                        <div class="col-sm-6">
                            Copyright &copy; 
                        </div>
                      
                    </div>
                </div>
            </footer>


        </div><!-- /#right-panel -->

        <!-- Right Panel -->
 


    </body>
    </html>
