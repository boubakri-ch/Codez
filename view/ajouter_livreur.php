
<?php   
include ("../core/livreurOps.php");

if (isset($_POST['code_livreur']))
{





$v=new Livreur ($_POST['code_livreur'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['num_tel']);


    $livreur= new livreurOps();
    $livreur->ajouterlivreur($v);
    echo "<p>livreur ajouter avec succes</p>";
 
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

   
   
    <!-- Left Panel -->

    <!-- Right Panel -->

    

        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Ajouter Livreur</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <form class="form-box" id="form-product" method="POST">
                                    <h1>Ajouter Livreur</h1>
                            
                                   
                                    <div  data-errormsg="">
                                        <input type="text" name="code_livreur" id="input-code_livreur" autofocus placeholder="Code Livreur" tabindex="1" />
                                    </div>
                                    <div  data-errormsg="">
                                        <input  type="text" name="nom" id="input-nom" autofocus placeholder="Nom" tabindex="2" required />
                                    </div>
                                    <div  data-errormsg="">
                                        <input type="text" name="prenom" id="input-prenom" autofocus placeholder="Prenom" tabindex="3"/>
                                    </div>
                                    <div  data-errormsg="">
                                        <input type="text" name="mail" id="input-mail" autofocus placeholder="EMail" tabindex="4" require/>
                                    </div>
                                    <div  data-errormsg="">
                                        <input type="text" name="num_tel" id="input-num_tel" autofocus placeholder="Numero" tabindex="5" />
                                    </div>
                                    <div>
                                        <button  class="ajouter" onClick ="val()" id="button-ajouter">Ajouter</button>
  
                                        <button class="cancel"id="button-cancel-prod">Annuler</button>
                                    </div>
   
                            
                             </form>
                             <script src="./livreur.js"></script> 
                             <script src="js/sweetalet.min.js"> </script>
                             
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
 
<script>
  swal({
    title: "Good job!",
    text: "Livreur Ajouter!",
    icon: "success",
  });
</script>
</body>
</html>
