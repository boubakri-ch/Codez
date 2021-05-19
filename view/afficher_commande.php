<?PHP
    include ("C:/wamp64/www/web/core/panierOps.php");
    $perpage=3;
    if(isset($_GET['page']))
    {
        $page=$_GET['page'];
    }else
    {
        $page=1;
    }
 
    if($page>1)
    {
        $start=($page*$perpage) - $perpage;
    }else
    {
        $start=0;
    }
    $db = config::getConnexion();

	$panier=new panierOps();
	$liste=$panier->afficher_commande_back($start,$perpage);	
    $sql_1="select count(entete_commande.code_commande) as nb from entete_commande";
    $count=$db->query($sql_1);
    

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
<a class="Export" href="excel_commande.php">Export</a>
<a class="Export" href="pdf_commande.php">Pdf</a>

		<hr>
		<table class="table" border=1 align = 'center' id="tab_commande">
        
			<tr>

				<th>Code commande  </th>
				<th>id client</th>
				<th>Date</th>
                <th>total</th>
                <th>adresse</th>
                




				
				


			</tr>

			<?PHP
				foreach($liste as $com){
                    $sql2="select SUM(commande.prix)as total from commande where commande.code_commande=".$com['code_commande'];
                    $liste_1=$db->query($sql2);

			?>
				<tr>
					
					<td><?PHP echo $com['code_commande']; ?></td>
					<td><?PHP echo $com['id_client']; ?></td>
                    <td><?PHP echo $com['date_c']; ?></td>
                    <td>
                    <?php foreach($liste_1 as $t)
                     {?>
                    <?PHP echo $t['total']; ?>
                    <?php } ?>
                    </td>

                    <td><?PHP echo $com['adresse']; ?></td>
                 





               

               
                 


					<td>
					 <a class="supprimer" href="supprimer_commande.php?id=<?PHP echo $com['code_commande'];?>">Supprimer</a>
                     <a class="afficher" href="afficher_commande_prod.php?id=<?PHP echo $com['code_commande'];?>">afficher les produits</a>
                     <a class="modifier" href="modifier_commande.php?id=<?PHP echo $com['code_commande'];?>">modifier</a>




					</td>	
				</tr>
             
			<?PHP
                    
				}
			?>
		</table>
        <?php
            foreach($count  as $c) {
              
           
            $halman=ceil(($c['nb']/$perpage)+1); 
           
            }
            for($i=1;$i<$halman;$i++)
            {
                echo "<a href='?page=$i'>$i</a>";
            
            }
            
           ?> 
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
url:'recherche_commande.php',
method:'POST',
data:{query:search},
success:function(response){
$("#tab_commande").html(response);
}
});
});
});
    </script>
</body>
</html>
