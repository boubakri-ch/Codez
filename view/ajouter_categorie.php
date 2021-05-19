<?php   
   require "C:/wamp64/www/web/core/categorieOps.php";
  
    if (isset($_POST['libelle']))
    {
    $c=new categorie (null,$_POST['libelle']);
    
    //var_dump($c);
    $categorie = new categorieOps();
    $categorie->ajouterCategorie($c);
    echo "<p>categorie ajouter avec succes</p>";
    }
    else
    {
        echo"<p>veillez remplir tous les champs</p>";
    }
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="eng"> <!--<![endif]-->
<?php include_once "header.php"; ?>

<body>
 
 
        <div class="content">
        <form class="form-box" id="form-categorie" method="POST" action="">
        <h1>Ajouter une catégorie</h1>

        
        <div  data-errormsg="">
            <input type="text" name="libelle" id="input-libelle" autofocus placeholder="libellé" tabindex="2" />
        </div>
      
        <div >
            <button   class="ajouter"id="button-ajouter">Ajouter</button>
            <button class="cancel"id="button-cancel">Annuler</button>
          </div>

 </form>
 <script src="./categorie.js"></script>  
           
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
