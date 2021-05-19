<?php   
include "C:/wamp64/www/web/core/fournisseurOps.php";




if (isset($_POST['adresse']))
{
    $img_name=$_FILES['image']['name'];
    $img_type=$_FILES['image']['type'];
    $image_blob=file_get_contents($_FILES['image']['tmp_name']);
$f=new fournisseur (null,$_POST['adresse'],$_POST['numero'],$image_blob,$_POST['nom']);
    $fournisseur= new fournisseurOps();
    $fournisseur->ajouterfournisseur($f);
   echo "<p>fournisseur ajouter avec succes</p>";
   
}
 
   // header("location:listeMaisons.php");
?>


<?php include_once "header.php"; ?>



<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<body>
    <!-- Left Panel -->

    
        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Ajouter Fournisseur</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <form class="form-box" id="form-product" method="POST" action="" enctype="multipart/form-data">
        <h1>Ajouter un fournisseur</h1>
        <div  data-errormsg="">
            <input type="text" name="nom" id="input-nom" autofocus placeholder="nom" tabindex="1" />
        </div>
       
        <div  data-errormsg="">
            <input type="text" name="adresse" id="input-adresse" autofocus placeholder="adresse" tabindex="2" />
        </div>
   
     
        <div  data-errormsg="">
        <div image>
            <input type="file" name="image" id="input-image" onchange="showPreview(event);" tabindex="3" />
            <img class="preview"  id="preview" width="200" height="200">
            </div>
        </div>
   
      <div  data-errormsg="">
            <input type="text" name="numero" id="input-numero" maxlength="8" autofocus placeholder="numero" tabindex="2" />
        </div>
     
        <div>
            <button  class="ajouter" id="button-ajouter">Ajouter</button>
            <button class="cancel"id="button-cancel-prod">Annuler</button>
        </div>

 </form>
                             <script src="./fournisseur.js"></script> 
                                 <!-- .card -->

                    </div><!--/.col-->

                    
    </div><!-- .content -->

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Ela Admin
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Colorlib</a>
                </div>
            </div>
        </div>
    </footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

 
  
</body>
</html>
