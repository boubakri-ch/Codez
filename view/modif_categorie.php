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
        
        require "C:/wamp64/www/web/core/categorieOps.php";
 
  
    $c = new categorieOps();
    $liste = $c->selectproduit($_GET['id_modif']);

   
    foreach($liste as $row){
?>
        <form class="form-box" id="form-categorie" method="POST" action="validmodif_cat.php">
        <h1>Modifier une catégorie</h1>

        <div  data-errormsg="">
            <input type="text" readonly name="id" id="input-id" autofocus placeholder="code categorie" value="<?php echo $row['code_categorie']; ?>" tabindex="2" />
        </div>
        <div  data-errormsg="">
            <input type="text" name="libelle" value="<?php echo $row['libelle']; ?>" id="input-libelle" autofocus placeholder="libellé" tabindex="2" />
        </div>
      
        <div >
            <button   class="ajouter"id="button-ajouter">modifier</button>
            <button class="cancel"id="button-cancel">Annuler</button>
          </div>

 </form>
 <script src="./categorie.js"></script>  
 <?php
    }
?>   
</div><!-- .content -->

<div class="clearfix"></div>

<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; Moatez borgi
            </div>
            
        </div>
    </div>
</footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

 

</body>
</html>
