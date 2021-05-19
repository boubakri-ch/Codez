<?PHP
    include ("C:/wamp64/www/web/core/fournisseurOps.php");
   
    $db = config::getConnexion();

	$fournisseur=new fournisseurOps();
	$liste_fournisseur=$fournisseur->afficher_fournisseur();	
    
?>
<?php include_once "header.php"; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <div class="content">
        <form enctype="multipart/form-data">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" id="search_text">
</nav>
		<hr>
		<table class="table" border=1 align = 'center' id="tab_four">
        
			<tr>

				<th>id  </th>
				<th>nom</th>
				<th>adresse</th>
                <th>numero</th>
                <th>image</th>


				
				


			</tr>

			<?PHP
				foreach($liste_fournisseur as $fournisseur){
                

			?>
				<tr>
					
					<td><?PHP echo $fournisseur['id_fournisseur']; ?></td>
					<td><?PHP echo $fournisseur['nom']; ?></td>
                    <td><?PHP echo $fournisseur['adresse']; ?></td>
                    <td><?PHP echo $fournisseur['numero']; ?></td>
                    <td><?PHP echo '<img src="data:image/;base64,'.base64_encode($fournisseur['image']).'"height="100px" width="100px" >'; ?></td>


               

               
                 


					<td>
					 <a class="supprimer" href="supprimer_fournisseur.php?id=<?PHP echo $fournisseur['id_fournisseur'];?>">Supprimer</a>
                     <a class="modifier" href="modifier_fournisseur.php?id=<?PHP echo $fournisseur['id_fournisseur'];?> ">Modifier</a>

					</td>	
				</tr>
             
			<?PHP
                    
				}
			?>
		</table>
        </form>
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

<!-- Scripts -->
 

<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#search_text").keyup(function(){
var search = $(this).val();
$.ajax({
url:'recherche_fournisseur.php',
method:'POST',
data:{query:search},
success:function(response){
$("#tab_four").html(response);
}
});
});
});
    </script>
</body>
</html>
