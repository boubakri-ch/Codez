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
        
    include "C:/wamp64/www/web/core/reservationOps.php";
  
 
  
    $p = new reservationOps();
    $liste = $p->selectreservation($_GET['id']);

   
    foreach($liste as $row){
?>
        <form class="form-box" id="form-product" method="POST" action="valid_modif_reservation.php" enctype="multipart/form-data">
        <h1>modifier reservation</h1>
        <div  data-errormsg="">
            <input type="text" name="num_tel" id="input-num_tel" autofocus placeholder="num_tel" tabindex="1" value="<?php echo $row['numero_tel']; ?>"  />
        </div>
        <div  data-errormsg="">
            <input type="date" name="date" id="input-date" autofocus placeholder="date" tabindex="1" value="<?php echo date ('Y/m/d',strtotime($row['date_reservation'])); ?> " />
            <?php echo date ('d/m/Y',strtotime($row['date_reservation'])); ?>
        </div>
       
        <div  data-errormsg="">
            <input type="text" name="num_p" id="input-num_p" autofocus placeholder="num_p" tabindex="2"  value="<?php echo $row['num_pers']; ?>" />
        </div>
   
     
      
       
   
      <div  data-errormsg="">
            <input type="text" name="code_reservation" id="code_reservation" autofocus placeholder="code_reservation" tabindex="2"  value="<?php echo $row['code_reservation']; ?>" readonly />
        </div>
        <div  data-errormsg="">
            <input type="text" name="id_fournisseur" id="id_fournisseur" autofocus placeholder="id_fournisseur" tabindex="2"  value="<?php echo $row['id_fournisseur']; ?>" />
        </div>
        <div  data-errormsg="">
            <input type="text" name="mail" id="mail" autofocus placeholder="mail" tabindex="2"  value="<?php echo $row['email_c']; ?>" />
        </div>
        <div>
            <button  class="ajouter" id="button-ajouter">modifier</button>
            <button class="cancel"id="button-cancel-prod">Annuler</button>
        </div>

 </form>
 <script src="./reservation.js"></script> 

 <?php
    }
?>

            </div><!-- .content -->

            <div class="clearfix"></div>

            <footer class="site-footer">
                <div class="footer-inner bg-white">
                    <div class="row">
                        <div class="col-sm-6">
                            Copyright &copy; 
                        </div>
                      
                    </div>
                </div>
            </footer>


        </div><!-- /#right-panel -->

        <!-- Right Panel -->
 


    </body>
    </html>
