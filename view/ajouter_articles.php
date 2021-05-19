<?php   
    require "C:/wamp64/www/web/core/produitOps.php";
    
    $sql="select * from categorie";
    $db = config::getConnexion();
    $liste=$db->query($sql);


    if (isset($_POST['desc']))
    {
   
        $img_name=$_FILES['image']['name'];
        $img_type=$_FILES['image']['type'];
        $image_blob=file_get_contents($_FILES['image']['tmp_name']);
   


    $p=new produit (null,$image_blob,$_POST['desc'],$_POST['liste_cat'],$_POST['prix'],$_POST['nom']);

    
        $produit = new produitOps();
        $produit->ajouterproduit($p);
       echo "<p>produit ajouter avec succes</p>";
    }
     
       // header("location:listeMaisons.php");
    ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="eng"> <!--<![endif]-->


 <?php include_once "header.php"; ?>
    

       
            <!--Ajouter le code d'ajout article-->
            <form class="form-box" id="form-product" method="POST" action="" enctype="multipart/form-data">
        <h1>Ajouter un produit</h1>
        <div  data-errormsg="">
            <input type="text" name="nom" id="input-nom" autofocus placeholder="nom" tabindex="1" />
        </div>
       
        <div  data-errormsg="">
            <input type="text" name="desc" id="input-libelle" autofocus placeholder="libellé" tabindex="2" />
        </div>
        <div  data-errormsg="">
            <textarea name="desc" id="input-libelle" rows=8 cols=80 tabindex="3" > </textarea>
        </div>
      
        <div  data-errormsg="">
        <div image>
            <input type="file" name="image" id="input-image" onchange="showPreview(event);" tabindex="3" />
            <img class="preview"  id="preview" width="200" height="200">
            </div>
        </div>
        <div data-errormsg="">
            <input type="number" min="0" name="prix" id="input-prix" placeholder="prix" tabindex="4">

        </div>
     
        <div  data-errormsg="">
            <select   name="liste_cat" id="input-cat">
            <option value="">Choisissez votre catégorie</option>
            <?php foreach($liste as $row):?>
            <option value="<?php echo $row[0];?>">
            <?php echo $row[1];?>
            </option>
            <?php endforeach?>
            
            </select>
        </div>
        <div>
            <button    class="ajouter" id="button-ajouter">Ajouter</button>
            <button class="cancel"id="button-cancel-prod">Annuler</button>
        </div>

 </form>
 <script src="./product.js"></script> 
        </div><!-- .content -->

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2021 Moatez Borgi
                </div>
            </div>
        </div>
    </footer>


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    


</body>
</html>
