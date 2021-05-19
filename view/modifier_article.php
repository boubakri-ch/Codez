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
        
        require "C:/wamp64/www/web/core/produitOps.php";
 
  
    $p = new produitOps();
    $liste = $p->selectproduit($_GET['id_modif']);

   
    foreach($liste as $row){
?>
        <form class="form-box" id="form-product" method="POST" action="validmodif_article.php" enctype="multipart/form-data">
        <h1>Modifier un produit</h1>

        <div  data-errormsg="">
            <input type="text" name="id_produit" id="input-id" value="<?php echo $row['code_produits']; ?>" readonly tabindex="1" />
        </div>
        <div  data-errormsg="">
            <input type="text" name="nom" id="input-nom" value="<?php echo $row['nom']; ?>" readonly tabindex="2" />
        </div>
        <div  data-errormsg="">
            <textarea name="desc" id="input-libelle" rows=8 cols=80 tabindex="3" ><?php echo $row['description']; ?></textarea>
        </div>
      
        
     
        <div  data-errormsg="">
            <input   type="file" name="image" id="input-image" onchange="showPreview(event);" tabindex="7"/>
            <img   name="image" class="preview"  id="preview"   <?PHP echo 'src="data:image/;base64,'.base64_encode($row['image_produit']).'"height="200px" width="200px"'; ?> >
           
        </div>
        <div data-errormsg="">
        <input type="number" min="0"  name="prix" id="input-prix" value="<?php echo $row['prix']; ?>" tabindex="8" />

        </div>
      
        <div  data-errormsg="">
            <?php
             $sql="select * from categorie where code_categorie=".$row['code_categorie'];
             $db = config::getConnexion();
             $liste_cat=$db->query($sql);
             ?>
                         <select   name="liste_cat" id="input-cat">

                         <?php foreach($liste_cat as $cate):?>

            <option value=" <?php echo $cate[0];?>">
             <?php echo $cate[1];?></option>  
               <?php endforeach?>
           <?php    $sql_1="select * from categorie where code_categorie <>".$cate[0];
    $db = config::getConnexion();
    $liste_c=$db->query($sql_1); ?>
            <?php foreach($liste_c as $cat):?>
            <option value="<?php echo $cat[0];?>">
            <?php echo $cat[1];?>
            </option>
            <?php endforeach?>
            
            </select>
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
                            Copyright &copy; Moatez Borgi
                        </div>
                      
                    </div>
                </div>
            </footer>


        </div><!-- /#right-panel -->

        <!-- Right Panel -->
 


    </body>
    </html>
