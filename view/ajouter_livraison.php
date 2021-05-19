
<?php   
include ("../core/livraisonOps.php");

$sql="select code_livreur ,prenom from livreur";
    $db = config::getConnexion();
    $liste=$db->query($sql); 
    $sql1="select code_commande  from entete_commande";
    $liste1=$db->query($sql1); 


    $vehicule = new livraisonOps();
 
 if(isset($_POST['date']))
 {
    $com=$_POST['liste_commande'];
    $liste_1=$vehicule->selectcode_client($com);
    $row2 = $liste_1->fetch(PDO::FETCH_ASSOC);
    $id_client=$row2['id_client'];

    $adr=$row2['adresse'];


$v=new livraison ($id_client,$adr,$com,$_POST['date'],null,$_POST['liste_livreur']);


    $vehicule->ajouterlivraison($v);
   echo "<p>livraison ajouter avec succes</p>";
 
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
                                <strong class="card-title">Ajouter Livraison</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <form class="form-box" id="form-product" method="POST" action="" enctype="multipart/form-data">
                                    <h1>Ajouter Livraison</h1>
                            
                                   
                                   
                                  
                                    
                                    <div  data-errormsg="">
                                    <select   name="liste_commande" id="input-commande">
            <option value="">Choisissez une commande pour livrer </option>
            <?php foreach($liste1 as $row1):?>
            <option value="<?php echo $row1[0];?>">
            <?php echo $row1[0];?>
            </option>
            <?php endforeach?>
            
            </select>                                 
           </div>
                                    <div  data-errormsg="">
                                        <input type="date" name="date" id="input-date" autofocus placeholder="date" tabindex="5" require />
                                    </div>
                                    <div  data-errormsg="">
            <select   name="liste_livreur" id="input-cat">
            <option value="">Choisissez votre livreur</option>
            <?php foreach($liste as $row):?>
            <option value="<?php echo $row[0];?>">
            <?php echo $row[1];?>
            </option>
            <?php endforeach?>
            
            </select>
        </div>
                                    <div>
                                    <input class="ajouter" type="submit" value="Ajouter" id="button-ajouter">
                                        <button class="cancel"id="button-cancel-prod">Annuler</button>
                                    </div>
                            
                             </form>
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
                    Designed by <a href="https://colorlib.com">Boubakri Chiheb</a>
                </div>
            </div>
        </div>
    </footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->


<script src="js/sweetalet.min.js"> </script>
   <script>
   swal({
    title: "Good job!",
    text: "You clicked the button!",
    icon: "success",
  }); 
  </Script>
</body>
</html>
