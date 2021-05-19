<?php   
    require "C:/wamp64/www/web/core/menuOps.php";
    $sql="select * from menu";
    $db = config::getConnexion();
    $liste=$db->query($sql);


    if(isset($_POST['nom']))
    {
     $v=new menu (NULL,$_POST['nom'],$_POST['prix'],$_POST['ingredient']);
    
    
        $menu= new menuOps();
        $menu->ajoutermenu($v);
       
       echo "<p>menu ajouter avec succes</p>";
    }
     
       
    ?>
 <?php include_once "header.php"; ?>


<!doctype html>
 
        <form class="form-box" id="form-menu" method="POST" action="">
        <h1>Ajouter un menu</h1>

        
        <div  data-errormsg="">
            <input type="text" name="nom" id="input-nom" autofocus placeholder="nom" tabindex="1" />
        </div>
       
        <div  data-errormsg="">
            <input type="text" name="prix" id="input-prix" autofocus placeholder="prix" tabindex="2" />
        </div>

        <div  data-errormsg="">
            <input type="text" name="ingredient" id="input-ingredient" autofocus placeholder="ingredient" tabindex="3" />
        </div>

       
        <div >
            <button   class="ajouter"id="button-ajouter">Ajouter</button>
            <button class="cancel"id="button-cancel">Annuler</button>
          </div>

 </form>
 <script src="menu.js"></script>  
           
</div><!-- .content -->

<div class="clearfix"></div>

<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
             </div>
            
        </div>
    </div>
</footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
 

</body>
</html>
