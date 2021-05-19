<?php   
    require "C:/wamp64/www/web/core/chefOps.php";
    $sql="select * from chef";
    $db = config::getConnexion();
    $liste=$db->query($sql);


    if(isset($_POST['nom']))
    {
     $v=new chef (NULL,$_POST['nom'],$_POST['prenom'],$_POST['fonction']);
    
    
        $chef= new chefOps();
        $chef->ajouterchef($v);
       
       echo "<p>chef ajouter avec succes</p>";
    }
     
       
    ?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<?php include_once "header.php"; ?>
 
        <form class="form-box" id="form-chef" method="POST" action="">
        <h1>Ajouter un menu</h1>

        
        <div  data-errormsg="">
            <input type="text" name="nom" id="input-nom" autofocus placeholder="nom" tabindex="1" />
        </div>
       
        <div  data-errormsg="">
            <input type="text" name="prenom" id="input-prenom" autofocus placeholder="prenom" tabindex="2" />
        </div>

        <div  data-errormsg="">
            <input type="text" name="fonction" id="input-fonction" autofocus placeholder="fonction" tabindex="3" />
        </div>

       
        <div >
            <button   class="ajouter"id="button-ajouter">Ajouter</button>
            <button class="cancel"id="button-cancel">Annuler</button>
          </div>

 </form>
 <script src="fonction.js"></script>  
           
</div><!-- .content -->

<div class="clearfix"></div>

<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; ridha
            </div>
            
        </div>
    </div>
</footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->



</body>
</html>
