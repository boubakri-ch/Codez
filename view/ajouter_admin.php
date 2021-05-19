<?php   
    require "C:/wamp64/www/web/core/loginOps.php";
   
   


    if (isset($_POST['nom']))
    {
   
   $mdp=md5($_POST['pwd']);

        $unique_id=rand(time(), 100000000);
    $a=new login (null,$unique_id,$_POST['nom'],$_POST['prenom'],$_POST['mail'],$mdp,null);

    
        $admin = new loginOps();
        $admin->ajouteradmin($a);
       echo "<p>produit ajouter avec succes</p>";
    }
     
       // header("location:listeMaisons.php");
    ?>
<?php include_once "header.php"; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="eng"> <!--<![endif]-->

<body>
    <!-- Left Panel -->
 

        <div class="content">
            <!--Ajouter le code d'ajout article-->
            <form class="form-box" id="form-admin" method="POST" action="" enctype="multipart/form-data">
        <h1>Ajouter un admin</h1>
        <div  data-errormsg="">
            <input type="text" name="nom" id="input-nom" autofocus placeholder="nom" tabindex="1" />
        </div>
       
        <div  data-errormsg="">
            <input type="text" name="prenom" id="input-prenom" autofocus placeholder="prénom" tabindex="2" />
        </div>
    
      
        <div  data-errormsg="">
            <input type="email" name="mail" id="input-mail" autofocus placeholder="E-mail" tabindex="2" />
        </div>
        <div  data-errormsg="">
            <input type="password" name="pwd" id="input-pwd" autofocus placeholder="Mot de passe" tabindex="2" />
        </div>
       
    
        <div>
            <button    class="ajouter" id="button-ajouter">Ajouter</button>
            <button class="cancel"id="button-cancel-prod">Annuler</button>
        </div>

 </form>
 <script src="./admin.js"></script> 
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
 


</body>
</html>
