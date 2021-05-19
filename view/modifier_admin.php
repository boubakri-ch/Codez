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
        require "C:/wamp64/www/web/core/loginOps.php";
 
  
    $c = new loginOps();
    $liste = $c->select_compte_modifier($_SESSION['unique_id']);

   
    foreach($liste as $row){
?>
        <form class="form-box" id="form-categorie" method="POST" action="validmodif_admin.php">
        <h1>Modifier votre profil</h1>

        <div  data-errormsg="">
            <input type="text" name="nom" id="input-nom" autofocus placeholder="nom" tabindex="1" value="<?php echo $row['fname']?>"/>
        </div>
       
        <div  data-errormsg="">
            <input type="text" name="prenom" id="input-prenom" autofocus placeholder="prénom" tabindex="2" value="<?php echo $row['lname']?>"/>
        </div>
    
      
        <div  data-errormsg="">
            <input type="email" name="mail" id="input-mail" autofocus placeholder="E-mail" tabindex="2" value="<?php echo $row['email']?>" />
        </div>
        <div  data-errormsg="">
            <input type="password" name="pwd" id="input-pwd" autofocus placeholder="Mot de passe" tabindex="2" />
        </div>
      
        <div >
            <button   class="ajouter"id="button-ajouter">modifier</button>
            <button class="cancel"id="button-cancel">Annuler</button>
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
                Copyright &copy; Moatez borgi
            </div>
            
        </div>
    </div>
</footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

 

</body>
</html>
