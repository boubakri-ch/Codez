<?PHP
   require "C:/wamp64/www/web/core/categorieOps.php";
    
	$cat=new categorieOps();
	$liste_cat=$cat->afficher_categorie();

?><?php include_once "header.php"; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="eng"> <!--<![endif]-->
 
<body>
 

        <div class="content">
        <form enctype="multipart/form-data">
		<hr>
		<table  border=1 align = 'center' >
			<tr>

				<th>code Catégorie</th>
				<th>libelle</th>

			</tr>

			<?PHP
				foreach($liste_cat as $categorie){
			?>
				<tr>
					<td><?PHP echo $categorie['code_categorie']; ?></td>
					<td><?PHP echo $categorie['libelle'];?></td>
					
					<td>
					 <a href="supprimer_categorie.php?id=<?PHP echo $categorie['code_categorie'];?>">Supprimer</a>
                     <a href="modif_categorie.php?id_modif=<?PHP echo $categorie['code_categorie'];?>">Modifier</a>

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
                        Copyright &copy; Moatez Borgi
                    </div>
                   
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
     


   


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


</body>
</html>
