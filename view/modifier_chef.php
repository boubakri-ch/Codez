<?php include_once "header.php"; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
  
<body>
    <!-- Left Panel -->

 

        <?php   
        
        require "C:/wamp64/www/web/core/chefOps.php";
 
  
    $p = new chefOps();
    $liste = $p->selectchef($_GET['id_modif']);

   
    foreach($liste as $row){
?>
        <div class="content">

        <form class="form-box" id="form-chef" method="POST" action="validmodif_chef.php" enctype="multipart/form-data">
        <h1>Modifier un chef</h1>

        <div  data-errormsg="">
            <input type="text" name="id_chef" id="input-id" value="<?php echo $row['id']; ?>" readonly tabindex="1" />
        </div>
        <div  data-errormsg="">
            <input type="text" name="nom" id="input-nom" value="<?php echo $row['nom']; ?>"  tabindex="3" />    
        </div>
       
        <div  data-errormsg="">
            <input type="text" name="prenom" id="input-prenom" value="<?php echo $row['prenom']; ?>"  tabindex="3" />    
        </div>
      
        <div  data-errormsg="">
            <input type="text" name="fonction" id="input-fonction" value="<?php echo $row['fonction']; ?>"  tabindex="4" />    
        </div>  
        
      
      
       
        <div>
            <button  class="ajouter" id="button-ajouter">Modifier</button>
            <button class="cancel"id="button-cancel">Annuler</button>
        </div>

 </form>
 <?php
    }
       ?>

 <script src="chef.js"></script> 


 </div><!-- .content -->

 

    </body>
    </html>
