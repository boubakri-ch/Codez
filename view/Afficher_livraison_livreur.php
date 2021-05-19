<?PHP
    include ("../core/livraisonOps.php");
    $db = config::getConnexion();
  
    
if(isset($_POST['ASC'])){
    $livraison=new livraisonOps();
    $liste = $livraisonOps->AfficherTri();
    

}

if(isset($_GET['id'])){
    $id=$_GET['id'];
}

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
    
    
	$livraison=new livraisonOps();
    
	$liste_livraison=$livraison->Afficher_livraison_livreur($id,$perpage,$start);
    $sql_1="select count(livraison.id) as nb from livraison,livreur where livreur.code_livreur=livraison.code_livreur";
    $count=$db->query($sql_1);
    
?>
<?php include_once "header.php"; ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
 

        <div class="content">
        <form enctype="multipart/form-data">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search" id="search_text">
    <input type="submit" name="ASC" value="Ascending">
</nav
		<hr>
        <a class="Export" href="Excel.php">Export</a>
        <a class="Export" href="pdff.php">Pdf</a>
		<table class="table" border=1 align = 'center' id="tab_livraison">
        
			<tr>

				<th>id livraison </th>
				<th>code_client</th>
                
				<th>adresse</th>
                <th>num commande</th>
				<th>date</th>
				


			</tr>

			<?PHP
				foreach($liste_livraison as $livraison){
                

			?>
				<tr>
					
					<td><?PHP echo $livraison['id']; ?></td>
					<td><?PHP echo $livraison['id_client']; ?></td>
                    
                    <td><?PHP echo $livraison['adresse']; ?></td>
                    <td><?PHP echo $livraison['num_commande']; ?></td>
                    <td><?PHP echo $livraison['date_l']; ?></td>


               

               
                 


					<td>
					 <a class="supprimer" href="supprimer_livraison.php?id=<?PHP echo $livraison['id'];?>">Supprimer</a>
                     <a class="modifier" href="modifier_livraison.php?id=<?PHP echo $livraison['id'];?> ">Modifier</a>

					</td>	
				</tr>
             
			<?PHP
                    
				}
			?>
		</table>
        <section>
<?php

$tab = array($db->query('SELECT * FROM livraison ORDER BY num_commande'));
for($I = count($tab) - 2;$I >= 0; $I--) {
 for($J = 0; $J <= $I; $J++) {
  if($tab[$J + 1] < $tab[$J]) {
   $t = $tab[$J + 1];
   $tab[$J + 1] = $tab[$J];
   $tab[$J] = $t;
  }
 }
}

?>


        </section>
        <?php
            foreach($count  as $c) {
              
           
            $halman=ceil(($c['nb']/$perpage)+1); 
           
            }
            for($i=1;$i<$halman;$i++)
            {
                echo "<a  href='?page=$i'>$i</a>";
            
            }
            
           ?> 
           <script type="text/javascript">
    $(document).ready(function(){
        $("#search_text").keyup(function(){
var search = $(this).val();
$.ajax({
url:'rechercher.php',
method:'POST',
data:{query:search},
success:function(response){
$("#tab_livraison").html(response);
}
});
});
});
    </script>
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
                    Designed by <a href="https://colorlib.com">Boubakri Chiheb</a>
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

</body>
</html>
